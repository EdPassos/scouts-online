class Person < ActiveRecord::Base
	belongs_to :user
	belongs_to :section
end
