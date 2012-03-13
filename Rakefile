

task :test do
  Dir["tests/*\.php"].each do |test|
    sh "php #{test}"
  end
end

task :default => :test
