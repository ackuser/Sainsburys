# Sainsbury’s Software Engineering Test

This task is intended to test your ability to consume a webpage, process some data
and present it.
While there is no specific time limit, we would not expect you to spend any longer
than 2 hours completing this.
We are looking for concise, testable, clean, well commented code and that you have
chosen the right tools for the right job. We will also be looking at your app structure
as a whole.
Requirements
Using best practice coding methods, build a console application that scrapes the
Sainsbury’s grocery site - Ripe Fruits page and returns a JSON array of all the
products on the page.
Example of the table below:

*****

You need to follow each link and get the size (in kb) of the linked HTML (no assets)
and the description to display in the JSON
Each element in the JSON results array should contain ‘title’, ‘unit_price’, ‘size’ and
‘description’ keys corresponding to items in the table.
Additionally, there should be a total field which is a sum of all unit prices on the page.

The link to use is:
http://www.sainsburys.co.uk/webapp/wcs/stores/servlet/CategoryDisplay?listView=tr
ue&orderBy=FAVOURITES_FIRST&parent_category_rn=12518&top_category=125
18&langId=44&beginIndex=0&pageSize=20&catalogId=10137&searchTerm=&categ
oryId=185749&listId=&storeId=10151&promotionId=#langId=44&storeId=10151&cat
alogId=10137&categoryId=185749&parent_category_rn=12518&top_category=1251
8&pageSize=20&orderBy=FAVOURITES_FIRST&searchTerm=&beginIndex=0&hide
Filters=true
Example JSON:

{
"results":[
{
"title":"Sainsbury's Avocado, Ripe
"size": "90.6kb",
"unit_price": 1.80,
"description": "Great to eat now -
avocado counts as 1 of your 5..."
},
{
"title":"Sainsbury's Avocado, Ripe
"size": "87kb",
"unit_price": 2.00,
"description": "Great to eat now -
avocado counts as 1 of your 5..."
}
],
"total": 3.80
}
& Ready x2",
refrigerate at home 1 of 5 a day 1
& Ready x4",
refrigerate at home 1 of 5 a day 1
Your code should:
- Include unit and / or behavioural tests.
- Include a README.md file in the root describing how to run the app, how to
run tests and any dependencies needed from the system
- Work on whichever of the following is relevant to the role you are applying for:
PHP5.4+, Python 2.7+, Golang 1.4+, Java 1.7+
You may use a dependency management system (e.g. composer, pip) and as many
dependencies as you like.
Please provide a link to a public VCS (github, etc)


-----------------------------------------------------------------------
INSTALLATION

My version of php

php -v ==> PHP 5.5.9

I am supposing we already have a basic LAMP environment installed

To install composer

curl -sS https://getcomposer.org/installer | php

To install phpunit

php composer.phar install

To run the scraper

php src/main.php

To run the test

phpunit tests/SumFinderClassTest.php
