# Step to start the application
- On the terminal or cmd of the root folder, type this php -S localhost:{portnumber}
- Access the localhost:{portnumber}/index.php to register a user account and follow the step through login and test user site.
- My group project output demo: https://drive.google.com/file/d/1Hp8IEt0cNkrtp6dNl8GRscMUxgaUT2BR/view?usp=sharing

CONTRIBUTION:

Kha Nguyen Anh Tran s3750945: 40% 

(Functions I contributed: login, registration, shipper, product-detail, myAccount, cart, header, footer)

# User Account
* CUSTOMER ||
username: customer <=>
password: Lazada2022!

* VENDOR ||
username: lazadavendor <=>
password: Rmit2022!

* SHIPPER ||
username: rmitshipper <=>
password: Shipper2022!

* YOUR ACCOUNT ||
email: (you create!) <=>
password: (you create!)

# DB description
# User Account
accounts.db: outside document root
[0]: hased registration id
[1]: username
[2]: password

# Handling session profile image
profilePicture.db: inside profileImgRepo folder
[0]: email
[1]: profile img name
