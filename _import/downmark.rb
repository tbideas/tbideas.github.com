
require File.join(File.dirname(__FILE__), "downmark_it")
require 'yaml'

for file in ARGV do
  content = File.read(file)
  header = nil
  
  begin
    if md = content.match(/^(---\s*\n.*?\n?)^(---\s*$\n?)/m)
      content = md.post_match
      header    = YAML.load(md[1])
    end
  rescue => e
    puts "YAML Exception reading #{file}: #{e.message}"
  end
  

  markdown = DownmarkIt.to_markdown content
  markdown.sub!(/<!--more-->/, "\n<!-- more -->\n\n")
  
  File.open(file.sub(".html", ".md"), "w") do |f|
    f.puts header.to_yaml
    f.puts '---'
    f.write( markdown )
  end
end

