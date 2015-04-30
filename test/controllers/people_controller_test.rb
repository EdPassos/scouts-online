require 'test_helper'

class PeopleControllerTest < ActionController::TestCase
  setup do
    @person = people(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:people)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create person" do
    assert_difference('Person.count') do
      post :create, person: { address: @person.address, baptismdate: @person.baptismdate, birthdate: @person.birthdate, citizenship: @person.citizenship, email: @person.email, idnumber: @person.idnumber, maritalstatus: @person.maritalstatus, name: @person.name, phonenumber: @person.phonenumber, socialsecurity: @person.socialsecurity, taxid: @person.taxid, zipcode_area: @person.zipcode_area, zipcode_building: @person.zipcode_building }
    end

    assert_redirected_to person_path(assigns(:person))
  end

  test "should show person" do
    get :show, id: @person
    assert_response :success
  end

  test "should get edit" do
    get :edit, id: @person
    assert_response :success
  end

  test "should update person" do
    patch :update, id: @person, person: { address: @person.address, baptismdate: @person.baptismdate, birthdate: @person.birthdate, citizenship: @person.citizenship, email: @person.email, idnumber: @person.idnumber, maritalstatus: @person.maritalstatus, name: @person.name, phonenumber: @person.phonenumber, socialsecurity: @person.socialsecurity, taxid: @person.taxid, zipcode_area: @person.zipcode_area, zipcode_building: @person.zipcode_building }
    assert_redirected_to person_path(assigns(:person))
  end

  test "should destroy person" do
    assert_difference('Person.count', -1) do
      delete :destroy, id: @person
    end

    assert_redirected_to people_path
  end
end
