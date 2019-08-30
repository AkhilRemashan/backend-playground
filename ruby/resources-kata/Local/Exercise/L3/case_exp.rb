
def get_day_name(day)

  day_name = ""

    # if day == "mon"
    #   day_name == "monday"
    # elsif day == "tue"
    #   day_name == "tuesday"
    #
    # else
    #   puts "Enter valid day name"

    case day
    when "mon"
      day_name = "Monday"

    when "tue"
      day_name = "Tueday"

    when "web"
      day_name = "Wednesday"

    when "thu"
      day_name = "Thursday"

    when "fri"
      day_name = "Friday"

    when "sat"
      day_name = "Saturday"

    when "sun"
      day_name = "Sunday"

    else
      day_name = "Invalid abbre."
    end


  return day_name

end

puts get_day_name("sat")
