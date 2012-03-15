task :test do
  Dir["benchmarks/*\.php"].each do |test|
    sh "php #{test}"
  end
end

task :large do
  Dir["benchmarks/large/*\.php"].each do |test|
    sh "php #{test}"
  end
end

task :default => :test
