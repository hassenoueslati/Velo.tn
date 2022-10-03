
# Vélo.tn

Vélo.tn est une application qui permet de regrouper les passionnés par les
vélos. Elle aura comme but d’insister sur la nécessité d’adopter plus
massivement le vélo comme moyen de transport alternatif à la voiture



## Cadre du projet

Ce projet fait partie du module Laravel pour 5 TWIN - 2022/2023

## Pre-installation
* PHP version 8



## Installation
* Clone the repositore using **git clone https://github.com/hassenoueslati/Velo.tn**
* Copy **.env.example**, rename it **.env** and change to your variables
* Run these commands
``` bash
composer update
```
``` bash
php artisan key:generate
```
``` bash
php artisan migrate
```
``` bash
php artisan db:seed
```

## Models

**User :**
<!-- - id_user (int)(pk)
- user_name (string)
- email (string)
- password(string)(bcrypt for pwd hashing) --> 
*À déterminer*

**Evenements:**
<!-- - id_box (int)(pk)
- box_name (string)(unique) -->
*À déterminer*

**Vélos :**
<!-- - id_booking (int)(pk)
- t_start(date)
- t_end(date)
- id_user(fk)
- id_box (fk) -->
*À déterminer*

**Boutique :**

*À déterminer*

**Services :**

*À déterminer*

## Tech Stack

**Laravel**



