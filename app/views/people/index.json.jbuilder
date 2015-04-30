json.array!(@people) do |person|
  json.extract! person, :id, :name, :citizenship, :birthdate, :baptismdate, :address, :zipcode_area, :zipcode_building, :taxid, :socialsecurity, :idnumber, :phonenumber, :email, :maritalstatus
  json.url person_url(person, format: :json)
end
