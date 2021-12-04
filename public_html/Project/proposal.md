# Project Name: Simple Shop
## Project Summary: This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders
## Github Link: https://github.com/vap49/IT202-009/tree/prod/public_html/Project
## Project Board Link: https://github.com/vap49/IT202-009/projects/1
## Website Link: https://vap49-prod.herokuapp.com/Project/home.php
## Your Name: Villaire A. Pierre

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] (mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
-->

### Proposal Checklist and Evidence

- Milestone 1
  - [x] (10/12/2021) User will be able to register a new account
    -  List of Evidence of Feature Completion
      * Form Fields
          * Username, email, password, confirm password (other fields optional)
          * Email is required and must be validated
          * Username is required
          * Confirm password’s match
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/register.php
      - Pull Requests
        - PR link #1 https://github.com/vap49/IT202-009/pull/11
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141399978-4c40a143-0e12-4712-aadd-14cf6e3a6804.png)
          - Showing user can login
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/82918026/141402621-0604e7d3-df76-4bb6-8bb2-44a287d09f95.png)
          - Showing email is required and validated
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/82918026/141423106-3c175c1d-97a7-452a-9ba7-209df3831315.png)
          - Showing Username is required and is validated
        - Screenshot #4 ![image](https://user-images.githubusercontent.com/82918026/141404871-0148a48e-894f-4bcb-a160-9f038cf8832f.png)
          - Showing flash message saying passwords must match
  - [x] (10/28/2021) User will be able to login to their account (given they enter the correct credentials)
    -  List of Evidence of Feature Completion
      * Form
          * User can login with **email **or **username**
              * This can be done as a single field or as two separate fields
          * Password is required
      * User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
      * Logging in should fetch the user’s details (and roles) and save them into the session.
      * User will be directed to a landing page upon login
          * This is a protected page (non-logged in users shouldn’t have access)
          * This can be home, profile, a dashboard, etc 
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/login.php
      - Pull Requests 
        - PR link #1: https://github.com/vap49/IT202-009/pull/12
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141408011-e2882d10-22bb-4ff3-9ac2-7f8994c671c0.png)
          - Screenshot #1 Users can login with email or username
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/82918026/141421786-4a20ee47-5454-4266-aac6-4e9ccefaeb80.png)
          - Showing Password is required
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/82918026/141421884-f8e52cf3-bc4a-42bd-8b86-bf196ff52c28.png)
          - Showing friendly error messages when an account doesnt exist or passwords dont match
        - Screenshot #4 ![image](https://user-images.githubusercontent.com/82918026/141421936-d987e34b-3225-4c1e-b198-bbd16fc2bbdd.png)
          - Showing fetching the user details and save them into the session
        - Screenshot #5 ![image](https://user-images.githubusercontent.com/82918026/141417108-786fbc01-caaf-45ee-9ef9-77b5c747f313.png)
          - Showing User will be directed to a landing page upon login
  - [x] (19/28/2021 of completion) User will be able to logout
    -  List of Evidence of Feature Completion
        * Logging out will redirect to login page
        * User should see a message that they’ve successfully logged out
        * Session should be destroyed (so the back button doesn’t allow them access back in)
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/logout.php
      - Pull Requests
        - PR link #1: https://github.com/vap49/IT202-009/pull/12
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141423340-f2a402a7-dad4-44d5-a825-9cabc25d26e7.png)
          - Showing logout redirecting back to login page
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/82918026/141423474-7edf9b4d-a572-4c67-812e-3a967f4b0ee3.png)
          - Showing user friendly logout message
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/82918026/141424018-498d826a-c145-43c4-89d2-f1119f202ecb.png)
          - Showing session unset and destroyed upon logout 
  - [x] (10/28/2021) Basic security rules implemented
    -  List of Evidence of Feature Completion
        * Authentication:
            * Function to check if user is logged in
            * Function should be called on appropriate pages that only allow logged in users
        * Roles/Authorization:
            * Have a roles table (see below)
      - Status: Completed 
      - Direct Link: https://vap49-prod.herokuapp.com/Project/login.php
      - Pull Requests
        - PR link #1: https://github.com/vap49/IT202-009/pull/12
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141424543-27ec0a77-af0d-47d3-93ec-a6ca9be66bba.png)
          - Showing function to validate whether user is logged in or not
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/82918026/141424660-d4913b45-3998-4d82-83f1-4f7fd62c1342.png)
          - Showing that function is called and only allows logged in users to view certain pages
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/82918026/141424787-78497068-d6b2-4494-8582-81e78cedb439.png)
          - Shows the creation of a roles table 
  - [x] (11/09/2021) Basic Roles implemented
    -  List of Evidence of Feature Completion
        * Have a <span style="text-decoration:underline;">Roles</span> table	(id, name, description, is_active, modified, created)
        * Have a <span style="text-decoration:underline;">User Roles</span> table (id, user_id, role_id, is_active, created, modified)
        * Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/Admin/create_role.php
      - Pull Requests
        - PR link #1: https://github.com/vap49/IT202-009/pull/32
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141425996-08188c6a-9d55-4221-b0bb-c22ec7d92121.png)
          - Showing a Roles Table
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/82918026/141426086-9e613bd9-9f11-4fc0-8f02-190a2707c307.png)
          - Showing a User Roles Table
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/82918026/141426210-abd3311a-4987-46bf-b92b-dd478aa50774.png)
          - Showing a function to validate whether a user has a specific role
  - [x] (11/10/2021) Site should have basic styles/theme applied; everything should be styled
    -  List of Evidence of Feature Completion
        * I.e., forms/input, navigation bar, etc
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/home.php
      - Pull Requests
        - PR link #1: https://github.com/vap49/IT202-009/pull/35
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141426802-8e04aab9-093a-42b5-866c-45006cb33bc0.png)
          - Showing some of the styling of the home pages and nav bar
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/82918026/141426881-d21b6d17-4b72-45f6-9ac5-31da0d976785.png)
          - Showing the styling of the forms 
  - [x] (10/07/2021 of completion) Any output messages/errors should be “user friendly”
    -  List of Evidence of Feature Completion
        * Any technical errors or debug output displayed will result in a loss of points
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/login.php
      - Pull Requests
        - PR link #1: https://github.com/vap49/IT202-009/pull/37
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141428033-2db45020-241e-4f1c-842f-1fb3b1386885.png)
          - Showing example of user friendly error message
  - [x] (11/04/2021) User will be able to see their profile
    -  List of Evidence of Feature Completion
        * Email, username, etc
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1: https://github.com/vap49/IT202-009/pull/30
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141428996-42b1a69f-ca61-4b5c-8932-eee77cd58e9b.png)
          - Showing that the user profile is accessible
  - [x] (11/04/2021) User will be able to edit their profile
    -  List of Evidence of Feature Completion
        * Changing username/email should properly check to see if it’s available before allowing the change
        * Any other fields should be properly validated
        * Allow password reset (only if the existing correct password is provided)
            * Hint: logic for the password check would be similar to login
      - Status: Completed
      - Direct Link: https://vap49-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1: https://github.com/vap49/IT202-009/pull/30
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/82918026/141430030-6206e749-0be2-4a18-9256-c45d0818f8a3.png)
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/82918026/141430494-a44b34ce-c991-49eb-9ab7-aac5d960ba21.png)
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/82918026/141431146-b37b4983-e0d2-42c5-b912-7036e6255360.png)
          - All three screenshots showing the validation process and results from making changes to the user in the user profile
- Milestone 2
<table><tr><td>Milestone 2</td></tr><tr><td><table><tr><td>F1 - User with an admin role or shop owner role will be able to add products to inventory (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/Admin/add_items.php](https://vap49-prod.herokuapp.com/Project/Admin/add_items.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F1 - Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/143996607-2e9b1917-2791-481d-8857-8956f7149269.png"><p>Screenshot showing the Products Table</td></tr></td></tr></table></td></tr><table><tr><td>F2 - Any user will be able to see products with visibility = true on the Shop page (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/shop.php](https://vap49-prod.herokuapp.com/Project/shop.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F2 - Product list page will be public (i.e. doesn’t require login)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144698775-07badc30-fa20-4a46-9161-e9909e1fbf7a.png"><p>Showing a Non Logged In user has access to shop page</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - For now limit results to 10 most recent<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699012-e9c902ca-8092-4e7e-8628-269aaac538c1.png"><p>Limiting the Query to 10 items</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to filter results by category and price<tr><td>Status: pending</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699061-ab3d9d7e-b696-4f0b-9524-103ab31dc27a.png"><p>Filter system for category and price</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to filter results by partial matches on the name<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699410-edad0a19-ce12-40ef-8e86-f32a51d00173.png"><p>Showing Partial Search Match on 2</td></tr></td></tr></table></td></tr><table><tr><td>F3 - Admin/Shop owner will be able to see products with any visibility (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/shop.php](https://vap49-prod.herokuapp.com/Project/shop.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F3 - This should be a separate page from Shop, but will be similar<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://vap49-prod.herokuapp.com/Project/Admin/list_items.php"><p>Page that shows all of the items in the database regardless of visibility.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - This page should only be accessible to the appropriate role(s)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699603-3be15958-b368-4095-8533-780ab2adb0b7.png"><p>Showing the list items page is protected based on the role</td></tr></td></tr></table></td></tr><table><tr><td>F4 - Admin/Shop owner will be able to edit any product (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/Admin/edit_item.php](https://vap49-prod.herokuapp.com/Project/Admin/edit_item.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F4 - Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699755-70d14c04-a5fa-40fc-a8f8-aa6b9ec96a5c.png"><p>Showing Edit Functionality</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699747-eac66d9e-f83f-48aa-ad05-1f8e8e7a794c.png"><p>Showing Edit Functionality</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699769-89d774c0-a2ed-4c08-a1e3-e738a194c8a4.png"><p>Showing Edit Functionality</td></tr></td></tr></table></td></tr><table><tr><td>F5 - User will be able to click an item from a list and view a full page with more info about the item (Product Details Page) (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/product_details.php](https://vap49-prod.herokuapp.com/Project/product_details.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F5 - Sub Item 1<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699835-8c2066f6-4ec9-47e3-99e7-b91f6b25299e.png"><p>Showing example of product details page</td></tr></td></tr></table></td></tr><table><tr><td>F6 - User must be logged in for any Cart related activity below (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/login.php](https://vap49-prod.herokuapp.com/Project/login.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F6 - Cart Is Protected Page<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144699892-88dfd1c9-3232-4fa7-aed8-55ae3e15e30e.png"><p>Flash Message after attempt to access cart while not logged in.</td></tr></td></tr></table></td></tr><table><tr><td>F7 - User will be able to add items to Cart ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/cart.php](https://vap49-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F7 - Cart will be table-based (id, product_id, user_id, desired_quantity, unit_cost, created, modified)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144700074-4d3c50c4-f1a1-41db-b34b-3a381db8999a.png"><p>Showing the cart table</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F7 - Adding items to Cart will not affect the Product's quantity in the Products table<tr><td>Status: completed</td></tr><tr><td><img width="100%" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F8 - User will be able to remove a single item from their cart vai button click ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/cart.php](https://vap49-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F8 - Remove Item Button<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144702038-61f599f5-f978-43d0-918e-3fda4e5e6bec.png"><p>The remove button showed here removes one item from the cart and updates the subtotal and cart total accordingly</td></tr></td></tr></table></td></tr><table><tr><td>F9 - User will be able to clear their entire cart via a button click (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/cart.php](https://vap49-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F9 - Empty Cart Button<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144702096-6bdbe208-c63a-4c2c-92da-48ecd0467e1a.png"><p>The empty cart button showed here will remove all of the items currently in the cart</td></tr></td></tr></table></td></tr><table><tr><td>F10 - User will be able to change quantity of items in their cart (2021-12-03)</td></tr><tr><td>Status: incomplete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/cart.php](https://vap49-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F10 - Quantity of 0 should also remove from cart<tr><td>Status: incomplete</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144702168-0f32425e-84df-46e0-a58a-b0e54c95d309.png"><p>I could not get a quantity text space working with the cart page in time</td></tr></td></tr></table></td></tr><table><tr><td>F11 - User will be able to see their cart ()</td></tr><tr><td>Status: incomplete</td></tr><tr><td>Links:<p>

 [https://vap49-prod.herokuapp.com/Project/cart.php](https://vap49-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/vap49/IT202-009/pull/63](https://github.com/vap49/IT202-009/pull/63)</p></td></tr><tr><td><table><tr><td>F11 - List all the items<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144702259-447c0006-2439-4177-8039-2bfa86cad855.png"><p>The cart items are being listed and shown to the user</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F11 - Show subtotal for each line item based on desired_quantity * unit_cost<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144702259-447c0006-2439-4177-8039-2bfa86cad855.png"><p>The subtotal and order total for the cart are shown to the user on the right side of the screen</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F11 - Show total cart value (sum of line item subtotals)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144702259-447c0006-2439-4177-8039-2bfa86cad855.png"><p>The order total is shown here on the right of the screen</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F11 - Will be able to click an item to see more details (Product Details Page)<tr><td>Status: incomplete</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/82918026/144702259-447c0006-2439-4177-8039-2bfa86cad855.png"><p>Could not complete in time, however, it would be an easy fix just add an href on the product name that links over to the product details page. href link will carry the item id do be displayed over to the product details page</td></tr></td></tr></table></td></tr></td></tr></table>
- Milestone 3
  - [ ] (mm/dd/yyyy of completion) User will be able to purchase items in their Cart
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) Order Confirmation Page
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) User will be able to see their Purchase History
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
    - [ ] (mm/dd/yyyy of completion) Store Owner will be able to see all Purchase History
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
