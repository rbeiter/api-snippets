# Get twilio-ruby from twilio.com/docs/ruby/install
require 'rubygems'          # This line not needed for ruby > 1.8
require 'twilio-ruby' 

# Get your Account Sid and Auth Token from twilio.com/user/account 
account_sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
auth_token = 'your_auth_token'
@client = Twilio::REST::Client.new account_sid, auth_token

# Get an object from its sid. If you do not have a sid,
# check out the list resource examples on this page
@ip_access_control_list_mapping = @client.account.sip.domains.get('SD32a3c49700934481addd5ce1659f04d2').ip_access_control_list_mappings.get("AL95a47094615fe05b7c17e62a7877836c")
puts @ip_access_control_list_mapping.friendly_name
