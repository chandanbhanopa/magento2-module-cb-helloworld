# Magento 2 Hello World module - It has CRUD operation with custom table with API functionality.

##### For Magento 2.3.x and 2.4.x

Just install it and learn how repository works in Magento.


#### What is Repository Desing Pattern in Magento2
In repository design pattern, the interfaces connected with database object to perfome CRUD operation. It hides the implementation of business logic.

#### Why we use Repository?

It is used to imporve the API managment so that third party developers can easily use it.


> ### List of APIs

> /V1/computers/save

{
  "computers": {
    "company": "string",
    "hard_disk": "string"
  }
}

> /V1/computers/{id}/

> /V1/computers/delete/{id}

> /V1/computers/list


### Features
* Create sample table with computer and harddisk fields.
* Create CRUD operation with form and validation in customer section
* Create ALL apis for third party developers

### Documentation

 - [How to Install SMTP Magento 2 Extension](https://www.magepal.com/help/docs/smtp-magento/?utm_source=smtp&utm_medium=github#installation)

- [How to setup Magento 2 SMTP Extension](https://www.magepal.com/help/docs/smtp-magento/?utm_source=smtp&utm_medium=github#configuration)

- [How to debugging Magento 2 SMTP Extension](https://www.magepal.com/help/docs/smtp-magento/?utm_source=smtp&utm_medium=github#debug)


### SMTP Service Providers
 * Gmail
 * Google App
 * G Suite
 * Amazon Simple Email Service (SES)
 * Microsoft Office365
 * Outlook
 * SparkPost
 * GoDaddy
 * Mandrill
 * MailGun
 * SendGrid
 * Elastic Email
 * Hotmail
 * AOL Mail
 * Yahoo Mail
 * AT&T
 * Verizon
 * Postmark
 * O2 Mail
 * Zoho
 * Mailjet
 * Mail.com
 * Your Company SMTP Server
 * and many other SMTP servers

### How to Install Magento Helloworld module

##### Using Composer (recommended)

```sh
composer composer require cb/helloworld
```

Contribution
---
chandanbhanopa@gmail.com
