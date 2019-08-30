
class Book
  attr_accessor :title, :author, :pages
end

book1 = Book.new()
book1.title = "Khasakhinte Ithihasam"
book1.author = "O V Vijayan"
book1.pages = 375

book2 = Book.new()
book2.title = "Balyakalasakhi"
book2.author = "Basheer"
book2.pages = 280

puts book1.pages
puts book2.author
