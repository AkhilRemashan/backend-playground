
# class Book
#   attr_accessor :title, :author, :pages
#   def initialize(name)
#     puts ("hello " + name)
#   end
# end
#
# book1 = Book.new("Akhil")
# book1.title = "Khasakhinte Ithihasam"
# book1.author = "O V Vijayan"
# book1.pages = 375
#
# book2 = Book.new("Achuthan")
# book2.title = "Balyakalasakhi"
# book2.author = "Basheer"
# book2.pages = 280
#
# puts book1.pages
# puts book2.author


class Book
  attr_accessor :title, :author, :pages
  def initialize(title, author, pages)
    @title = title
    @author = author
    @pages = pages
  end
end

book1 = Book.new("Khasakhinte Ithihasam", "O V Vijayan", 250)

puts book1.title
