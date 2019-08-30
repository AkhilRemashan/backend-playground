
# lucky_nums = [4, 8, 15, 16, 23, 42]

# lucky_nums["dog"]

begin
  lucky_nums["dog"]
  # num = 10/0
rescue ZeroDivisionError
  puts "Division by zero error"
# rescue TypeError
#   puts "Wrong Type"
rescue TypeError => e
  puts e
end
