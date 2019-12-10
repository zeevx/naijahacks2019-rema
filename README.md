# NaijaHacks 2019

## Team REMA - Result Management and Analysis

### Database Schema and APIs

````
schools:
Schema::create('school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

````

````
Teachers:
Schema::create('teacher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

````

````
Students:
Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

````

````
Results:
Schema::create('result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student')->unique();
            $table->string('email')->unique();
            $table->timestamps();
````

````
Analysis:
Schema::create('analysis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student')->unique();
            $table->string('email')->unique();
            $table->timestamps();
````

````
Register:

Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

````

````
ForgetPassword: 
Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();

````

### APIs

````
Nexmo APIs(Ready) - cf64c93a, qVv****

````



### Project Description
 Learning and teaching organizations(e.g schools) find it difficult to handle results of past students, we have built a system that provide this organizations the ability to store results for as long as possible, the system doesn't just store student result during the course of study but it also uses this data to intelligently(AI) **tell where the student is performing less**, **suggest possible solutions** and **provide insight on how to carry out the solutions**. We are making learning and teaching easier.



### Team Members
* Adams Paul - Full stack web developer/IOT systems Engineer
* Olarewaju Mojeed - C++ Developer
* Ajewole Ayomide - Android Developer
