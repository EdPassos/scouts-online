class CreateSections < ActiveRecord::Migration
  def change
    create_table :sections do |t|
      t.string :name
      t.string :members
      t.string :groups
      t.integer :minimum_age
      t.integer :maximum_age
      t.text :description

      t.timestamps null: false
    end
  end
end
