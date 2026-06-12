# Group-Project
### Group F Members
|     NAME      |   MATRIC NO.   |     TASK      | 
| ------------- | ------------- | ------------- |
|1. Maria Wardah binti Mohd Ghazali | 2218014 | Objectives, Travel Package |
|2. Amir Mustaqim Bin Ismail  | 2218607 |  Features & Functionalities, Hotel, Prayer Space  |
|3. Aisha Humairah binti Ahmad Adzuan  | 2219130  |  ERD, Login, Destinations & Flights   |
|4. Siti Hajar 'Aainaa binti Hamid | 2218648  |    Title & Introduction, Restaurant |
|5. Musanna Sarder Abdullah          | 2220429  |   Sequence Diagram        

### Title
Taqwa Travels

### Introduction
Traveling is a universal activity that bridges cultures, fosters understanding, and creates lasting memories. However, for Muslim travelers, finding accommodations, dining options, and prayer facilities that align with Islamic principles can be a significant challenge. The lack of easily accessible information on Shariah-compliant services often leads to inconvenience and limits their ability to enjoy travel experiences to the fullest.

To address this gap, we propose the development of a Shariah-Compliant Travel Planner. It is a web-based platform designed to cater specifically to the needs of Muslim travelers. This platform will serve as a comprehensive guide, helping users identify halal-certified hotels and restaurants, locate prayer spaces and plan itineraries that respect their religious obligations.

The Shariah-Compliant Travel Planner aims to simplify travel for the global Muslim community by integrating technology with faith-based travel requirements. By creating a seamless user experience that combines convenience and compliance, this project will contribute to the growing halal tourism market and promote inclusive travel solutions.

### Objective

The primary objective of the Shariah-Compliant Travel Planner is to provide a one-stop platform that facilitates hassle-free travel for Muslim travelers. This includes:

1. Accessibility: Offering easily navigable tools to locate Shariah-compliant accommodations, dining options, and prayer facilities.
2. Customization: Enabling users to tailor their itineraries to meet personal preferences and religious obligations.
3. Inclusivity: Promoting halal tourism as a part of the global travel industry.
4. Awareness: Enhancing awareness of halal tourism services among service providers and travelers alike.

### Features & Functionalities

a) **Halal-Certified Hotel Finder**

**Description**: A centralized database of hotels that meet Shariah compliance.  
**Functionalities**:  
- Search and filter hotels based on halal-certified kitchens, alcohol-free environments, and prayer facilities.  
- Display halal certification and endorsements (e.g., from local Islamic authorities).  
- Include user ratings and reviews specific to halal compliance.  
- Booking integration to reserve rooms that link with Booking.com website.

b) **Halal Restaurant Locator**

**Description**: A tool to find restaurants serving halal food at destinations worldwide.  
**Functionalities**:  
- Search by cuisine type, price range, or proximity to the user’s location.  
- Display halal certifications and Muslim-owned restaurant indicators.

c) **Travel Packages**

**Description**: A Muslim-friendly travel package that includes destinations, hotels, and activities.  
**Functionalities**:
- Users can search travel packages by destination, price range, duration, and type of travel.
- Display the details on what the package covers and pricing per person.
- Booking: Collect user details, number of travelers, and preferred dates.

d) **Payment**

**Description**: Handles booking payments securely, including payment status and history.  
**Functionalities**:
- Support for multiple payment methods, including credit/debit cards, and e-wallets.
- Instant email and SMS notifications with booking details and a payment receipt.
- Users can view their transaction details.

e) **Login and User Management**  

**Description**: Includes user registration and login functionality.  
**Functionalities**:
- User roles (admin vs. user) will determine access to different features.

### ERD

![Database ER diagram (crow's foot)](https://github.com/user-attachments/assets/705be48e-418e-4015-aa5d-620bc64d4e83)

### Sequence Diagram

![SqD](https://github.com/user-attachments/assets/6258e527-a119-4f6a-8938-0c4a3d00b0da)

### Mock Up
[View the Mock-Up on Canva](https://www.canva.com/design/DAGZthEtXYk/v3tOHtIv05zn2EpcwOnXLQ/edit)

### Screenshots with description

1. Homepage
   
   ![homepage](https://github.com/ahumairah02/Group-Project/blob/eeebc83ac25143410de5ae05ccddc1031057d868/images/homepage.png)
   
    This is the homepage of our website, **Taqwa Travels**. It includes six navigation options: Home, Destinations, Hotels, Restaurants, Travel Packages, and Prayer Spaces. The **Get        Started** button leads to the login page. Users can also log in or log out from the navigation bar.

2. Login

    ![login](https://github.com/ahumairah02/Group-Project/blob/156746d9f547a384f684ac6dac5cde02ae6e042a/images/login.png)

   The login page allows users to access their accounts by entering their **email** and **password**. It includes:

    - A **"Remember Me"** checkbox for easier future logins.
    - A **"Forgot Password"** link to reset the password if needed.
    - A **Login** button that redirects users to the homepage upon successful authentication.
    - A **"Register"** link for users who don’t have an account, allowing them to create a new one.
      
3. Register

   ![register](https://github.com/ahumairah02/Group-Project/blob/d5b57cf115718994a8c1537b478b4359a6aa296d/images/register.png)

   The registration page allows new users to create an account by filling in the following details:

    - **Name**
    - **Email**
    - **Password**
    - **Confirm Password**

    It includes:

    - A **Register** button that redirects users to the homepage upon successful registration.
    - A **"Already Registered?"** link that directs users to the login page if they already have an account.

4. Destinations

    ![destinations](https://github.com/ahumairah02/Group-Project/blob/d5b57cf115718994a8c1537b478b4359a6aa296d/images/destinations.png)
    ![destinations2](https://github.com/ahumairah02/Group-Project/blob/d5b57cf115718994a8c1537b478b4359a6aa296d/images/destinations(1).png)
    ![destinations3](https://github.com/ahumairah02/Group-Project/blob/d5b57cf115718994a8c1537b478b4359a6aa296d/images/destinations(2).png) 

    The destinations page allows users to search for their ideal travel plans with a **Choose Destination** form. The form includes:

    - **Select Destination**: Choose the desired travel location.
    - **Departure Date**: Pick a start date for the journey.
    - **Return Date**: Select the date to return.
    - **Travellers (Quantity)**: Specify the number of travelers.
    - **Cabin Class**: Choose between First Class, Business Class, or Economy.

    Additionally, the page ensures Shariah compliance with options to select:
    - **Muslim-Friendly Attractions**
    - **Halal Amenities**
  
   Once the form is filled and the **Search** button is clicked, users are directed to the **Flight Page**.

    Below the page, users will find **Suggested Destinations**, which include:
    - **Istanbul**
    - **Kuala Lumpur**
    - **Marrakech**
    
    Each destination has a **View Details** link that provides more information about the specific place.

5. Destinations Details

   ![destinations4](https://github.com/ahumairah02/Group-Project/blob/142c800b911487373b10f1ce6d65de568dc76ded/images/destinations(3).png)
   ![destinations5](https://github.com/ahumairah02/Group-Project/blob/142c800b911487373b10f1ce6d65de568dc76ded/images/destinations(4).png)

   Clicking on **View Details** will display a **carousel of images** showcasing the selected destination. Users can also view information about the destination’s **hotels**,
   **restaurants**, and **travel packages**. There is also a button to go back to all destinations for further exploration.

7. Flights

   ![flights](https://github.com/ahumairah02/Group-Project/blob/d5b57cf115718994a8c1537b478b4359a6aa296d/images/flights.png)

    The flight page displays the available flights for the selected destination. It includes a list of flights with the following details:

    - **Flight Number**
    - **Price**

    Users can choose a flight from the list. Once they click on a specific flight, they will be redirected to the **Booking Flight Page** to proceed with their booking.

8. Booking Flights

   ![flights-info](https://github.com/ahumairah02/Group-Project/blob/d5b57cf115718994a8c1537b478b4359a6aa296d/images/flights-info.png)

   The booking flight page requires users to fill in the following information to complete their booking:

    - **Full Name**
    - **Email Address**
    - **Phone Number**
    - **Payment Information**

    Once the required details are entered and the booking is confirmed, users will be directed to the **Confirmation Page** for final review and confirmation of their flight reservation.

9. Confirmation

   ![confirmation](https://github.com/ahumairah02/Group-Project/blob/d5b57cf115718994a8c1537b478b4359a6aa296d/images/confirmation.png)

   The confirmation page ensures that the user’s booking has been successfully confirmed. It includes a message confirming the reservation details and notifies the user that a
   **confirmation email** will be sent shortly with all relevant booking information.



10. Hotel
    
    ![hotel](https://github.com/ahumairah02/Group-Project/blob/333945ee630fd5041f00a04fe37979a2a010673d/images/hotel%20page.jpeg)
    
    
    This page is shown when the user clicks "hotel" in the navigation bar. The system retrieves and lists all suggested hotels stored in the database. Each hotel card             includes the name, address, halal certification status, rating, and along with a button to book via an external platform like Booking.com..
    
    ![hotel_dest](https://github.com/ahumairah02/Group-Project/blob/a26edb043265b81b13d74da544777cbbd179ffee/images/hotel_dest.png)
    
    
    This page is displayed when the user selects "Hotels" from the destination page and filters results based on a specific destination (e.g., Kuala Lumpur). The system retrieves and        shows suggested hotels based on the chosen destination. Each hotel card provides the name, address, halal certification status, and rating, along with a button to book via an            external platform like Booking.com.
    
    ![hotel booking](https://github.com/ahumairah02/Group-Project/blob/333945ee630fd5041f00a04fe37979a2a010673d/images/booking.com%20page.png)

    
    When user click **book via Booking.com**,it will redirect to the Booking.com page.
    
    

12. Restaurant
     **Restaurant in Navigation Bar**
     ![Restaurant](https://github.com/ahumairah02/Group-Project/blob/333945ee630fd5041f00a04fe37979a2a010673d/images/restaurant%20page.jpeg)

    
    This page is shown when the user clicks "Restaurants" in the navigation bar. The system retrieves and lists all suggested restaurants stored in the database. Each restaurant card        includes the name, address, halal certification status, rating, and a button to view more details.

    - **Saved Restaurants** button : allows users to access their saved or favorite restaurants.
    - **Sort By** dropdown         : allow users to sort the restaurant base on their preference (Rating and halal status)

    **Restaurant by destinantion**
    ![Restaurant_dest](https://github.com/ahumairah02/Group-Project/blob/8099f4ab7029958b93db23596fa3f6f9a17918d9/images/restaurant_dest.png)

    
    This page is displayed when the user selects "Retaurants" from the destination page and filters results based on a specific destination (e.g., Kuala Lumpur). The system retrieves 
    and shows suggested restaurants based on the chosen destination. Each restaurant card provides the name, address, halal certification status, and rating. 

     **View restaurant detais**
    ![Restaurant details](https://github.com/ahumairah02/Group-Project/blob/333945ee630fd5041f00a04fe37979a2a010673d/images/restaurant%20detail.jpeg)

    
   **Description for the image:**  
    When the user clicks the "View Details" button on a restaurant card, they are redirected to the restaurant's description page. This page provides detailed information about the     
    selected restaurant, including:  

    - The name of the restaurant displayed at the top.  
    - A cover image showcasing the restaurant's ambiance.  
    - Key details "At a Glance," such as the address, halal certification status, contact information, and a link to the restaurant's website.  
    - An "About" section .  
    - Business hours displayed in a table format for each day of the week.  

    The page also includes a "Save this restaurant" button for users to bookmark the restaurant and a "Back to List" button to navigate back to the main restaurant listing page.

12. Travel Package

    ![Travel package](https://github.com/ahumairah02/Group-Project/blob/333945ee630fd5041f00a04fe37979a2a010673d/images/travelPackage.jpeg)

    This section allows **administrators** to manage travel packages offered by the **Taqwa Travel**. Admins can **create new packages, view existing ones, edit details**, and **delete packages** as needed.

    ![add Travel package](https://github.com/ahumairah02/Group-Project/blob/333945ee630fd5041f00a04fe37979a2a010673d/images/addPackage.jpeg)
    
    This section is where admins **create new travel packages** for the **Taqwa Travel**.

    **How it works:**
    
    1. Select Destination: Choose the **travel destination** from the dropdown.
    2. Enter Details: Fill in the **Package Name, Description**, and **Price**.
    3. Save Package: Click **"Add Package"** to create the new package.

    ![edit Travel package](https://github.com/ahumairah02/Group-Project/blob/333945ee630fd5041f00a04fe37979a2a010673d/images/editPackage.jpeg)

    This section allows **admins** to **update travel package** details.

    **How it works**:
    
    Select Package: Choose the **package** to edit.
    Modify Details: Change the **Destination, Name, Description**, or **Price**.
    Save Changes: Click **"Update Package"** to save the changes.

14. Prayer Space
    ![Prayer Space](https://github.com/ahumairah02/Group-Project/blob/65cfeee25206e9b319dea16fc6f699868ec7b74e/images/PrayerSpace.jpeg)


    
15.Payment page : ![Screenshot 2025-01-18 141007](https://github.com/user-attachments/assets/4a8abfa3-8bbb-475d-9508-0651edaa2a87)

### Challenges & Difficulties to Develop The Application

- **Time Constraints**: The project had a short time frame for completion, which made it challenging to implement and test all features thoroughly.
- **GitHub Usage**: Some team members faced difficulties with **GitHub**, especially when it came to **pulling** or **pushing** changes, as they were not accustomed to using version control systems.

### References

1. GitHub Docs: Markdown Syntax Guide - [https://docs.github.com/en/get-started/writing-on-github/basic-writing-and-formatting-syntax](https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)
2. Laravel Documentation - [https://laravel.com/docs](https://laravel.com/docs)  
3. Muslim Pro App - [https://www.muslimpro.com/](https://www.muslimpro.com/)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
