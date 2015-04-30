class CreatePeople < ActiveRecord::Migration
  def change
    create_table :people do |t|
      t.string :name
      t.string :citizenship
      t.date :birthdate
      t.date :baptismdate
      t.string :address
      t.integer :zipcode_area
      t.integer :zipcode_building
      t.integer :taxid
      t.integer :socialsecurity
      t.integer :idnumber
      t.integer :phonenumber
      t.string :email
      t.string :maritalstatus

      t.timestamps null: false
    end
  end
end
