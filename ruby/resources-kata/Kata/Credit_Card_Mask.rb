def maskify(cc)
  if cc.length <= 4
    return cc
  elsif cc.length > 4
    cc[0..-5] = '#' * (cc.length - 4)
    return cc
  else
    return cc
    
  end
end