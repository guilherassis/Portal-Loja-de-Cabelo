<?php

/**
 * @author 
 * @copyright 2010
 */


/*
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
*/


body {
	margin: 0;
	padding: 0;
	background: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #464032;
}

h1, h2, h3 {
	margin: 0;
	padding: 0;
	font-weight: normal;
	color: #221D1D;
}

h1 {
	font-size: 2em;
}

h2 {
	font-size: 2.4em;
}

h3 {
	font-size: 1.6em;
}

p, ul, ol {
	margin-top: 0;
	line-height: 180%;
}

ul, ol {
}

a {
	text-decoration: none;
	color: #ED3A00;
}

a:hover {
}

#margem {
	width: 960px;
	margin: 0 auto;
	padding: 0;
}

/* Header */

#titulo {
	width: 940px;
	height: 170px;
	margin: 0 auto;
	
}

/* Logo */

#logo {
	float: left;
	height: 40px;
	margin: 0;
	color: #000000;
}

#logo h1, #logo p {
	margin: 0;
	padding: 0;
}

#logo h1 {
	float: left;
	padding-left: 20px;
	letter-spacing: -1px;
	font-size: 3.8em;
}

#logo p {
	float: left;
	margin: 0;
	padding: 26px 0 0 10px;
	font: normal 14px Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #5E4E38;
} 

#logo p a {
	color: #5E4E38;
}

#logo a {
	border: none;
	background: none;
	text-decoration: none;
	color: #A83A01;
}

/* Menu */

#menu {
	width: 965px;
	height: 36px;
	margin: 0 auto;
	padding: 0;
	background: #fef501;
}

#menu ul {
	margin: 0px 0px 0px 10px;
	padding: 0;
	list-style: none;
	line-height: normal;
}

#menu li {
	float: left;
}

#menu a {
	display: block;
	height: 26px;
	margin-bottom: 10px;
	padding: 10px 20px 0px 20px;
	text-decoration: none;
	text-align: center;
	text-transform: uppercase;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000000;
	border: none;
}

#menu a:hover, #menu .current_page_item a {
	background: #E93301;
	text-decoration: none;
}

#menu .current_page_item a {
	background: #E93301;
	color: #000000;
}

/* Page */

#page {
	width: 940px;
	margin: 0 auto;
	padding: 0;
}

#page-bgtop {
	padding: 20px 0px;
}

#page-bgbtm {
}

/* Content */

#content {
	float: right;
	width: 620px;
	padding: 0px 0px 0px 0px;
}

.post {
	margin-bottom: 15px;
}

.post-bgtop {
}

.post-bgbtm {
}

.post .title {
	margin-bottom: 5px;
	padding: 12px 0 0 0px;
	letter-spacing: -.5px;
	color: #000000;
}

.post .title a {
	color: #221D1D;
	border: none;
}

.post .meta {
	height: 5px;
	border-bottom: 1px solid #DBDBDB;
	background: #F4F4F4;
	margin: 0px;
	padding: 0px 0px 0px 0px;
	text-align: left;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
}

.post .meta .date {
	float: left;
	height: 24px;
	padding: 3px 15px;
	color: #464032;
}

.post .meta .posted {
	float: right;
	height: 24px;
	padding: 3px 15px;
	color: #464032;
}

.post .meta a {
	color: #464032;
}

.post .entry {
	padding: 0px 0px 0px 0px;
	padding-bottom: 0px;
	text-align: justify;
}

.links {
	padding-top: 5px;
	font-size: 12px;
	font-weight: bold;
}

/* Sidebar */

#sidebar {
	float: left;
	width: 280px;
	padding: 0px;
	color: #787878;
}

#sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

#sidebar li {
	margin: 0;
	padding: 0;
}

#sidebar li ul {
	margin: 0px 0px;
	padding-bottom: 30px;
}

#sidebar li li {
	line-height: 35px;
	border-bottom: 1px dotted #E5E0C6;
	margin: 0px 30px;
	border-right: none;
}

#sidebar li a {
	padding-left: 10px;
	background: url(images/img03.gif) no-repeat left 5px;
}

#sidebar li li span {
	display: block;
	margin-top: -20px;
	padding: 0;
	font-size: 11px;
	font-style: italic;
}

#sidebar h2 {
	padding-left: 30px;
	padding-top: 6px;
	padding-bottom: 6px;
	background: #fef501;
	letter-spacing: -.5px;
	font-size: 1.8em;
	color: #000000;
}

#sidebar p {
	margin: 0 0px;
	padding: 10px 30px 20px 30px;
	text-align: justify;
}

#sidebar a {
	border: none;
	color: #898989;
}

#sidebar a:hover {
	text-decoration: underline;
	color: #6E6E6E;
}

/* Calendar */

#calendar {
}

#calendar_wrap {
	padding: 20px;
}

#calendar table {
	width: 100%;
}

#calendar tbody td {
	text-align: center;
}

#calendar #next {
	text-align: right;
}

/* Footer */

#footer {
	width: 940px;
	height: 50px;
	margin: 0 auto;
	padding: 0px 0 15px 0;
	border-top: 4px solid #EBE6D1;
	font-family: Arial, Helvetica, sans-serif;
}

#footer p {
	margin: 0;
	padding-top: 20px;
	line-height: normal;
	font-size: 10px;
	text-transform: uppercase;
	text-align: center;
	color: #444444;
}

#footer a {
	color: #464032;
}

/*Links*/

a:link {
	color: black;
	text-decoration:none;
   
}

a:visited {
	color: black;
	text-decoration:none;

}

a:active {
	background-color: black;
	text-decoration:none;
	
}

a:hover {
	color:black;
	text-decoration:none;

}

img{
	border: 0;
}




?>