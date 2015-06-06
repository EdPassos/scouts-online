class PagesController < ApplicationController
  def welcome
	  unless user_signed_in?
		  redirect_to new_user_session_path
	  end
  end

  def profile
	  @user = current_user
	  render 'users/show'
  end
end
