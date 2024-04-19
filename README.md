# Webshop

Based on "Build a Webshop From A-Z" by Philo Hermans on Laracasts.com

Updated for Laravel 11 and Livewire 3

Using example product images from [Psychopathic Merch](https://psychopathicmerch.com)
Go buy some Juggalo crap and maybe they won't sue.

Using [livewire-toaster](https://github.com/masmerise/livewire-toaster) instead of Jetstream banner 

Finalizing Cart: Need to look at using loadMissing. The way I am calling with('relations') on items is working fine
to avoid the N+1 problem but loadMissing on the cart property needs to be tested.
