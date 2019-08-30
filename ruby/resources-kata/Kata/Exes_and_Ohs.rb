def XO(str)
    
    str_down = str.downcase()
    
    str_arr = str_down.split('').map(&:to_s)
 
      x = str_arr.count("x")
      o = str_arr.count("o")
 
     if x == o 
       return true
     elsif x != o 
       return false
     else
       return true
     end
   
 end