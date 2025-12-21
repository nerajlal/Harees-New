# 📝 Using Shop Configuration

## Overview
All shop contact information, business hours, social media links, and gold rates are now stored in the `.env` file and can be accessed throughout the application using Laravel's `config()` helper.

## Configuration File
Location: `config/shop.php`

## Environment Variables
Location: `.env`

All shop-related variables start with `SHOP_` or `GOLD_RATE_`

## How to Use in Blade Templates

### Shop Name
```blade
{{ config('shop.name') }}
```
Output: "Harees Jewellery"

### Contact Information

**Email:**
```blade
{{ config('shop.contact.email') }}
```
Output: "info@hareesjewellery.com"

**Phone:**
```blade
{{ config('shop.contact.phone') }}
```
Output: "+91 1234567890"

**Alternate Phone:**
```blade
{{ config('shop.contact.phone_alt') }}
```
Output: "+91 0987654321"

### Address

**Full Address:**
```blade
{{ config('shop.address.line1') }}<br>
@if(config('shop.address.line2'))
    {{ config('shop.address.line2') }}<br>
@endif
{{ config('shop.address.city') }}, {{ config('shop.address.state') }}<br>
{{ config('shop.address.pincode') }}, {{ config('shop.address.country') }}
```

**Individual Fields:**
```blade
{{ config('shop.address.line1') }}
{{ config('shop.address.line2') }}
{{ config('shop.address.city') }}
{{ config('shop.address.state') }}
{{ config('shop.address.pincode') }}
{{ config('shop.address.country') }}
```

### Business Hours

**Weekday Hours:**
```blade
{{ config('shop.hours.weekday') }}
```
Output: "10:00 AM - 8:00 PM"

**Sunday Hours:**
```blade
{{ config('shop.hours.sunday') }}
```
Output: "10:00 AM - 6:00 PM"

### Social Media Links

```blade
<a href="{{ config('shop.social.facebook') }}">Facebook</a>
<a href="{{ config('shop.social.instagram') }}">Instagram</a>
<a href="{{ config('shop.social.twitter') }}">Twitter</a>
<a href="{{ config('shop.social.youtube') }}">YouTube</a>
```

### Gold Rates

**22K Gold:**
```blade
₹{{ number_format(config('shop.gold_rates.22k')) }}
```
Output: "₹7,500"

**24K Gold:**
```blade
₹{{ number_format(config('shop.gold_rates.24k')) }}
```
Output: "₹9,100"

## Examples

### Contact Page Example
```blade
<div class="contact-info">
    <h3>Phone</h3>
    <p>{{ config('shop.contact.phone') }}</p>
    
    <h3>Email</h3>
    <p>{{ config('shop.contact.email') }}</p>
    
    <h3>Address</h3>
    <p>
        {{ config('shop.address.line1') }}<br>
        {{ config('shop.address.city') }}, {{ config('shop.address.state') }}
    </p>
</div>
```

### Footer Example
```blade
<footer>
    <div class="footer-contact">
        <p>Email: {{ config('shop.contact.email') }}</p>
        <p>Phone: {{ config('shop.contact.phone') }}</p>
    </div>
    
    <div class="footer-social">
        <a href="{{ config('shop.social.facebook') }}">Facebook</a>
        <a href="{{ config('shop.social.instagram') }}">Instagram</a>
    </div>
    
    <div class="footer-hours">
        <p>Mon-Sat: {{ config('shop.hours.weekday') }}</p>
        <p>Sunday: {{ config('shop.hours.sunday') }}</p>
    </div>
</footer>
```

### Gold Rate Page Example
```blade
<div class="gold-rates">
    <div class="rate-card">
        <h3>22K Gold</h3>
        <p class="price">₹{{ number_format(config('shop.gold_rates.22k')) }}</p>
        <p class="unit">per gram</p>
    </div>
    
    <div class="rate-card">
        <h3>24K Gold</h3>
        <p class="price">₹{{ number_format(config('shop.gold_rates.24k')) }}</p>
        <p class="unit">per gram</p>
    </div>
</div>
```

## How to Update Values

### Option 1: Update .env file directly
```env
SHOP_EMAIL="newemail@hareesjewellery.com"
SHOP_PHONE="+91 9876543210"
GOLD_RATE_22K=7600
```

### Option 2: Use artisan command
```bash
php artisan config:clear
php artisan config:cache
```

## Files Already Updated

✅ **contact-us.blade.php** - Uses config for phone, email, and address
✅ **.env.example** - Contains all shop configuration variables
✅ **config/shop.php** - Configuration file created

## Files to Update

These files should be updated to use config values instead of hardcoded text:

- [ ] `resources/views/pages/gold-rate.blade.php`
- [ ] `resources/views/pages/stores.blade.php`
- [ ] `resources/views/partials/footer.blade.php`
- [ ] `resources/views/partials/header.blade.php`
- [ ] Any other files with hardcoded contact info

## Benefits

1. **Easy Updates** - Change contact info in one place (.env)
2. **Environment-Specific** - Different values for dev/staging/production
3. **No Code Changes** - Update without touching code
4. **Centralized** - All shop info in one location
5. **Version Control** - .env not committed, keeps sensitive data safe

## Quick Reference

| What | Config Key |
|------|------------|
| Shop Name | `config('shop.name')` |
| Email | `config('shop.contact.email')` |
| Phone | `config('shop.contact.phone')` |
| Address | `config('shop.address.line1')` |
| City | `config('shop.address.city')` |
| State | `config('shop.address.state')` |
| Weekday Hours | `config('shop.hours.weekday')` |
| Sunday Hours | `config('shop.hours.sunday')` |
| Facebook | `config('shop.social.facebook')` |
| Instagram | `config('shop.social.instagram')` |
| 22K Gold Rate | `config('shop.gold_rates.22k')` |
| 24K Gold Rate | `config('shop.gold_rates.24k')` |

---

**Now all shop information is centralized and easy to manage!** 🎉
