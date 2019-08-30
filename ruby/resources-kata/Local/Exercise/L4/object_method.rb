
class Student
  attr_accessor :name, :major, :gpa
  def initialize (name, major, gpa)

    @name = name
    @major = major
    @gpa  = gpa

  end

  def has_honors

    if @gpa >= 2.5
      return true
    else
      return false
    end

  end

end

student1 = Student.new("Nathan", "Physics", 3)
student2 = Student.new("Kieren", "Chemistry", 1.6)

puts  student1.name
puts  student2.gpa

puts student1.has_honors
