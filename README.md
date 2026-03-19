# Nico Poultry & Eggs Ltd – Website

A responsive business landing page with an integrated order system for a poultry supplier mainly Turkey , Chicken and their eggs. Built using vanilla HTML, CSS, and JavaScript with a focus on performance, accessibility, and user experience.

---

## Features

* **Responsive Navigation**: Desktop + mobile menu with hamburger toggle and accessibility support
* **Hero Section**: Animated counters and call-to-action buttons
* **Product Showcase**: Cards for chickens, turkeys, and eggs with lazy-loaded images
* **Pricing Table**: Supports fixed, negotiable, and quote-based pricing
* **Order System**:

  * Real-time order summary (product, quantity, pricing)
  * Input validation (name, phone, quantity)
  * Dynamic pricing logic
  * WhatsApp order integration with structured message
* **UX Enhancements**:

  * Smooth scrolling
  * Scroll-based animations
  * Back-to-top button
  * Toast notifications
* **Accessibility**:

  * ARIA labels
  * Keyboard navigation
  * Semantic HTML

---

## JavaScript Architecture

* Encapsulated using IIFE for scope isolation
* Utility functions for DOM selection and currency formatting
* Uses IntersectionObserver for animations and counters
* Event-driven structure for UI interactions and form handling

---

## Core Logic

* **Pricing Engine**: Maps products and delivery costs dynamically
* **Validation**: Ensures required fields and valid Tanzanian phone numbers
* **Order Processing**:

  * Generates unique order reference
  * Builds formatted WhatsApp message
  * Redirects user to WhatsApp API

---

## Performance

* Lazy-loaded images
* Passive event listeners
* No external JS dependencies
* Optimized DOM updates

---

## Deployment

Static hosting ready:

* GitHub Pages
* Netlify
* Vercel

---

## Future Improvements

* Backend integration (order storage)
* Payment gateway support
* Admin dashboard
* Inventory management

---

## License

Public project – not for redistribution.
