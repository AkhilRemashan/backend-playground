def high_and_low(numbers)
  
    max_min = numbers.split(' ').map(&:to_i)
    int_minmax = "#{max_min.max} #{max_min.min}"
    return int_minmax
    
end