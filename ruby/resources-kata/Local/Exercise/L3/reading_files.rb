
File.read("Trash/employees.txt", "r") do |file|


  # puts file.read()
  puts file.read().include? "Jim"

  # Read line
  puts file.readline()

  # Read character
  puts file.readchar()

  # Loop through array
  for line in file.readlines()[3]
    puts line
  end

end

# Using variable as storage

file = File.open("Trash/employees.txt, "r")

puts file.read
file.close()
