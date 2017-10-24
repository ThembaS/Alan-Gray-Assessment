# Php File Upload

+ compatible with Php 5

## About

**move_uploaded_file** This function checks to ensure that the file designated by filename is a valid upload file (meaning that it was uploaded via PHP's HTTP POST upload mechanism). 
If the file is valid, it will be moved to the filename given by destination.


**fopen() ** binds a named resource, specified by filename, to a stream.

**fread()** reads up to length bytes from the file pointer referenced by handle. 
Reading stops as soon as one of the following conditions is met:

	length bytes have been read
	EOF (end of file) is reached
	a packet becomes available or the socket timeout occurs (for network streams)
	stream is read buffered and it does not represent a plain file.
	
**fgets()** Gets a line from file pointer. Returns a string of up to length - 1 bytes 
read from the file pointed to by handle. If there is no more data to read in the file pointer, 
then FALSE is returned.

```
On the user.txt list format, it is assumed that every recent followed user is in the left most side
after the word "follows" and each follow action can be listed once.

```

## File Structure

Index File, Output File, Style File, Tweets File, And Users File

## Package managers

###  XAMPP, WAMP or LAMP server locally 
```
xampp install Apache distribution containing MariaDB, PHP, and Perl.Compatable with windows, Linux, OS X
```
You could find Xampp in (https://www.apachefriends.org/download.html)

### run PHP without a web server?

For windows system you should be able to run php by following below steps:

Download php version you want to use and put it in c:\php.
append ;c:\php to your system path using cmd or gui.
call $ php -S localhost:8000 command in a folder which you want to serve the pages from.


## Browser compatibility

Uses **Bootstrap** front-end component library.
You could check out features of target browsers 

| Feature/Browser  | IE 8-9 |  IE10+ | Firefox 28+ | Chrome 38+ | Safari 6+ | 
|----------|:---:|:---:|:---:|:---:|:---:|
| `<input type="file"/>` | + | + | + | + | + |
| `<input type="file" multiple/>` | - | + | + | + | + |


