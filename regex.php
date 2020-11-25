
To match a string that contains only those characters (or an empty string), try

"^[a-zA-Z0-9_]*$"

Breaking it down:

^ : start of string
[ : beginning of character group
a-z : any lowercase letter
A-Z : any uppercase letter
0-9 : any digit
_ : underscore
] : end of character group
* : zero or more of the given characters
$ : end of string