
is_male = true
is_tall = false

# if is_male and is_tall
#   puts "You are a tall male"
# else
#   puts "You are either not male or not tall"
# end

# if is_male or is_tall
#   puts "You are a tall male"
# else
#   puts "You are either not male or not tall"
# end

if is_male and is_tall
  puts "You are a tall male"
elsif is_male and !is_tall
  puts "You are a short male"
elsif !is_male and is_tall
  puts "You are not male but are tall"
else
  puts "You are either not male or not tall"
end
