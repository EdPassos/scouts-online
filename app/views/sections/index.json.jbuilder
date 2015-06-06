json.array!(@sections) do |section|
  json.extract! section, :id, :name, :members, :groups, :minimum_age, :maximum_age, :description
  json.url section_url(section, format: :json)
end
