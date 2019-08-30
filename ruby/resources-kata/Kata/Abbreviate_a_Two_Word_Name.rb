def abbrev_name(name)

    full_name = name.split
    fname = full_name[0].chars.first.upcase()
    lname = full_name[1].chars.first.upcase()
    abbr = ("#{fname}.#{lname}")
    return abbr
end