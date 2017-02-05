# Project 1 - Globitek CMS

Time spent: 4 hours spent in total

## User Stories

The following **required** functionality is completed:

1. [&#10004;]  Required: Create a Users Table
  * [&#10004;]  Required: Use the command line to connect to the database "globitek".
  * [&#10004;]  Required: Define a table "users" with the required columns.

2. [&#10004;]  Required: Create a Page with an HTML Form
  * [&#10004;]  Required: It has required text inputs.
  * [&#10004;]  Required: It submits to itself.
  * [&#10004;]  Required: It looks correct in a browser.
  
3. [&#10004;]  Required: Detect when the form is submitted.
  * [&#10004;]  Required: When page loads, page displays the form.
  * [&#10004;]  Required: When form submits, page retrieves the form data.

4. [&#10004;]  Required: Validate form data.
  * [&#10004;]  Required: Require the provided validation functions library.
  * [&#10004;]  Required: Validate the presence of all form values.
  * [&#10004;]  Required: Validate that no values are longer than 255 characters.
  * [&#10004;]  Required: Validate that first\_name and last\_name have at least 2 characters.
  * [&#10004;]  Required: Validate that username has at least 8 characters.
  * [&#10004;]  Required: Validate that email contains a "@".

5. [&#10004;]  Required: Display form errors if any validations fail.
  * [&#10004;]  Required: Do not submit the data to the database.
  * [&#10004;]  Required: Redisplay the form with the submitted values filled in.
  * [&#10004;]  Required: Report all errors as a list above the form.
  * [&#10004;]  Required: Test each field to ensure you get the expected errors.

6. [&#10004;]  Required: Submit successfully-validated form values to the database.
  * [&#10004;]  Required: Write an SQL insert statement.
  * [&#10004;]  Required: Add current date and time to "created\_at".
  * [&#10004;]  Required: Follow best practices regarding the query result and database connection.
  * [&#10004;]  Required: Use the command line to check the records.

7. [&#10004;]  Required: Redirect the user to a confirmation page.
    * [&#10004;]  Required: Locate the page "public/registration\_success.php".
    * [&#10004;]  Required: Redirect the user to the new page. ([Tips](#!hints))

8. [&#10004;]  Required: Sanitize all dynamic output for HTML. ([Tips](#!hints))


The following advanced user stories are optional:

* [ ]  Bonus 1: Validate that form values contain only whitelisted characters.

* [ ]  Bonus 2: Validate the uniqueness of the username.


## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='https://github.com/sammanthp007/Globitek-CMS/blob/master/output.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [Desktop Recorder](http://recordmydesktop.sourceforge.net/about.php) and [imagemagick](www.imagemagick.org).

## License

    Copyright [yyyy] [name of copyright owner]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
