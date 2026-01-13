# WordPress Performance & Security Optimization

## Project Overview
This project focuses on improving WordPress performance and implementing
advanced security hardening techniques using custom plugin development
and industry best practices.

The project was developed and tested in a local WordPress environment
and follows production-ready security architecture.

---

## Key Features Implemented

### Performance Optimization
- Page caching and GZIP compression
- Browser caching verification
- Database cleanup and optimization
- Lighthouse-based performance analysis

### Security Hardening
- Brute-force attack protection using login rate limiting
- XML-RPC access restriction
- REST API user enumeration prevention
- Advanced HTTP security headers:
  - Content-Security-Policy (CSP)
  - X-Frame-Options
  - X-Content-Type-Options
  - X-XSS-Protection
  - Referrer-Policy
  - Permissions-Policy
- Admin panel hardening and reduced attack surface

---

## Tools & Technologies
- WordPress
- PHP
- Apache / Nginx
- Chrome DevTools
- WP Fastest Cache
- Limit Login Attempts Reloaded

---

## Testing & Validation
- Verified security headers using Chrome DevTools (Network → Headers)
- Simulated brute-force login attempts to validate rate limiting
- Tested XML-RPC and REST endpoints for access restriction

---

## Deployment Notes
- Project implemented in a local development environment
- HTTPS, HSTS, and WAF concepts are designed for production deployment
- Security configurations are reusable for staging and production servers

---

## Author
Geedi Nikhil
