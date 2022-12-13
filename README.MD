# Yoga Admission Form 

# Features

1. By this form student will able to register to the Yoga Admission classes.
2. All the data filled by student will save in mysql database. You will get confirmation message about your Admission in alert box. 
3. Student of age limit 18 to 65 can only be able to register via this form. 
4. Student can choose the class timing via drop down option. 
5. After successful Admission, student need to pay the fee of Rs 500.
6. Note: Student can change their class timing after one month according to the month of joining. 

# Constraint on input fields:
1. Email validation is done by type="email" attribute 
2. Age must be in the range of 18-65 for this, I use min & max attribute in the input tag.
3. Provided only 4 option for the class timing according to the problem statement.
4. Form will only be submit if all the above constraints are followed by all input fields. 


# Technology Used: 
1. HTML,CSS,Javascript for the frontend
2. Php for the backend
3. Tools: VSCode,Xampp


# Database design: 

1. Created userdetails table inside yoga-Admission-form database 
2. Email will be act as primary key for the userdetails table. 

![database schema](https://user-images.githubusercontent.com/66469791/207317727-7709ae65-79a8-478f-9251-8a44f0af65ad.jpg)

2. Records of the registered students.
![record ](https://user-images.githubusercontent.com/66469791/207317756-6b26eee7-e171-4f0d-9422-d3dea4abb13d.jpg)


# Query for the insertion of the data to the mysql database
1. INSERT INTO `userdetails`(`email`, `name`, `age`, `batchtime`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]') ; 

# Demo: 
![Screenshot (1221)](https://user-images.githubusercontent.com/66469791/207318546-059c3be7-6656-436c-b792-c1df088047de.png)
