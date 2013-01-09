
for file in ARGV do
  content = File.read(file)
  
  while md = content.match(/\!\[(.*)\]\((.*tbideas.com.*?)\s"(.*)"\)/) do
    alt = md[1] != "" ? md[1] : md[3]
    url = md[2]
    title = md[3] || md[1]
    
    href = url.gsub(/.*\//, "/blog/img/")
    newimagetag = "![#{ alt }](#{ href } \"#{ title }\")"
    
    print "Was:     #{ md[0] }\n"
    print "Becomes: #{ newimagetag }\n"
    #print "Downloading... \n"
    #system("curl '#{ url }' -o ../#{ href }")
    content.sub!(md[0], newimagetag)
  end
  
  File.open(file, "w") do |f|
    f.write(content)
  end
end