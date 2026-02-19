# OG Tech PC E-Commerce Project Structure

## Overview
This is a PHP-based e-commerce application following an MVC-like architecture pattern. The project uses Materialize CSS for UI components and MySQL (via XAMPP) for database management.

---

## 📁 Root Directory (Main Pages/Views)

| File | Purpose |
|------|---------|
| `index.php` | **Landing/Home Page** - Main entry point with carousel, product categories showcase, company stats counter, promotional video, and company values display |
| `aboutus.php` | **About Us Page** - Company information and background |
| `contactUs.php` | **Contact Page** - Customer contact form and information |
| `login.php` | **Login Page** - User authentication interface |
| `signup.php` | **Sign Up Page** - New user registration interface |
| `product_catalogue.php` | **Product Catalogue** - Browse products by category with search and filter functionality |
| `product.php` | **Product Detail Page** - Individual product view with reviews, ratings, and add-to-cart functionality |
| `cart.php` | **Shopping Cart** - View and manage cart items, proceed to checkout |
| `payment.php` | **Payment Page** - Checkout and payment processing interface |
| `payment_done.php` | **Payment Confirmation** - Order success/confirmation page |
| `manage_profile.php` | **User Profile Management** - Edit user account details and view order history |
| `review.php` | **Review Page** - Submit product reviews and ratings |
| `warranty_page.php` | **Warranty Information** - Display warranty details |
| `warranty_form.php` | **Warranty Claim Form** - Submit warranty claims |
| `header.php` | **Global Header Template** - Navigation bar, search functionality, session management, Materialize CSS/JS includes |
| `footer.php` | **Global Footer Template** - Site footer with links and information |
| `admin.php` | **Admin Dashboard** - Admin control panel with statistics (signups, products, orders), real-time counters, and product reviews |
| `admin_manage_users.php` | **User Management** - Admin interface to view/manage registered users |
| `admin_manage_products.php` | **Product Management** - Admin interface to add/edit/delete products |
| `admin_edit_products.php` | **Product Editor** - Detailed product editing interface |
| `admin_view_orders.php` | **Order Management** - View and manage customer orders |
| `admin_report.php` | **Reports & Analytics** - Generate business reports (users, products, orders) |
| `ogtech.sql` | **Database Schema** - SQL file containing database structure and initial data |
| `README.md` | **Project Documentation** - Basic project information |

---

## 📁 classes/ (Models - Business Logic)

| File | Purpose |
|------|---------|
| `Dbhandler.class.php` | **Database Handler (Base Class)** - Manages MySQL connection using XAMPP credentials (host: 127.0.0.1, user: root, db: ogtech). All other classes extend this. |
| `commonUtil.class.php` | **Common Utilities** - Shared utility functions extending Dbhandler |
| `InitDb.class.php` | **Database Initializer** - Creates required database tables on first run (auto-initialization) |
| `Item.class.php` | **Product Model** - Represents a product with properties: itemID, name, brand, description, category, price, stock, image, reviews, and average rating. Handles product data CRUD operations. |
| `member.class.php` | **Member/User Model** - Represents a user with properties: memberID, username, email, privilegeLevel, cart, and orders. Factory method `CreateMemberFromID()` for instantiation. |
| `login.class.php` | **Login Model** - Handles user authentication logic, extends CommonUtil |
| `loginContr.class.php` | **Login Controller** - Processes login form submissions, extends Login |
| `signup.class.php` | **Sign Up Model** - Handles new user registration logic, extends Dbhandler |
| `signupContr.class.php` | **Sign Up Controller** - Processes registration form submissions, extends Signup |
| `admin.class.php` | **Admin Model** - Admin-specific database operations, extends Dbhandler |
| `adminContr.class.php` | **Admin Controller** - Processes admin actions and displays admin data (reviews, statistics), extends Admin |
| `OrderContr.class.php` | **Order Controller** - Manages order operations (create, update, delete), extends Dbhandler |
| `OrderItemContr.class.php` | **Order Item Controller** - Manages individual order line items, extends Dbhandler |
| `ProfileContr.class.php` | **Profile Controller** - Handles profile update operations, extends CommonUtil |
| `Review.class.php` | **Review Model** - Represents a product review with username, rating, and feedback |

---

## 📁 includes/ (Controllers - Form Handlers)

| File | Purpose |
|------|---------|
| `class_autoloader.php` | **Auto-loader** - SPL autoloader that dynamically loads classes from `classes/` directory based on class name |
| `login.inc.php` | **Login Handler** - Processes login form POST data, validates credentials, creates session |
| `logout.inc.php` | **Logout Handler** - Destroys user session and redirects |
| `signup.inc.php` | **Sign Up Handler** - Processes registration form, validates input, creates new user |
| `manage_profile.inc.php` | **Profile Update Handler** - Processes profile edit form submissions |
| `buy_or_cart.inc.php` | **Add to Cart Handler** - Processes "Add to Cart" or "Buy Now" actions from product pages |
| `order.inc.php` | **Order Handler** - Processes order creation and updates |
| `product_catalogue.inc.php` | **Catalogue Handler** - Processes product filtering, sorting, and search queries |
| `review.inc.php` | **Review Handler** - Processes product review submissions |
| `admin.inc.php` | **Admin Handler** - Processes admin form submissions (user/product management) |
| `readme.txt` | **Includes Documentation** - Documentation for includes directory |

---

## 📁 static/ (Assets & Resources)

### static/css/ (Stylesheets)
| File | Purpose |
|------|---------|
| `base.css` | **Base Styles** - Global styles, typography, color scheme |
| `nav.css` | **Navigation Styles** - Header and navigation bar styling |
| `cards.css` | **Card Components** - Product card and category card styles |
| `roundedCards.css` | **Rounded Card Styles** - Special rounded card components |
| `searchBar.css` | **Search Bar Styles** - Search input and autocomplete styling |
| `magnifier.css` | **Image Magnifier** - Product image zoom functionality styles |
| `rating.css` | **Rating Stars** - Star rating display styles |
| `contact_form.css` | **Contact Form** - Contact page form styling |
| `logo.css` | **Logo Styles** - Brand logo specific styles |

### static/js/ (JavaScript)
| File | Purpose |
|------|---------|
| `Event.js` | **Event Handlers** - Global event listeners and handlers |
| `Magnifier.js` | **Image Zoom** - Product image magnifier functionality |
| `pagination.js` | **Pagination** - Table pagination for admin pages |
| `product_page.js` | **Product Page** - Product detail page interactions |

### static/images/ (General Images)
| File/Folder | Purpose |
|-------------|---------|
| `carousel_1-4.*` | **Homepage Carousel** - Banner images for landing page slider |
| `category_1-3.*` | **Category Images** - PC Packages, Monitor & Audio, Peripherals category thumbnails |
| `Banner-Rebate-1.*` | **Promotional Banner** - Rebate promotion image |
| `aboutusbgimg.jpg` | **About Us Background** - About page background image |
| `admin_image.jpg` | **Admin Placeholder** - Admin panel placeholder image |
| `ice_pc.png` | **Featured Product** - White PC build showcase image |
| `Partners.png` | **Partners Logo** - Brand partners display |
| `acer.png`, `asus.jpg`, `corsair.png`, `hyperx.jpg`, `logitech.png`, `msi.png`, `razer.png`, `viewsonic.jpeg` | **Brand Logos** - Manufacturer/brand images for search autocomplete |
| `audio.png`, `category_2.gif`, `monitor.jpg`, `mouse.png`, `speaker.jpg` | **Category Icons** - Category representation images |
| `values_images/` | **Company Values Icons** - SVG/PNG icons for OG Tech values (E.svg, H.png, P.svg, Rebate.png, S.svg, T.svg) |

### static/pages/ (Reusable Page Components)
| File | Purpose |
|------|---------|
| `admin_nav.php` | **Admin Navigation** - Admin panel sidebar navigation |
| `side_nav.html` | **Side Navigation** - General side navigation template |
| `cart_items.php` | **Cart Items Component** - Reusable cart item display |
| `order_items.php` | **Order Items Component** - Reusable order item display |

### static/materialize/ (Materialize CSS Framework)
| File | Purpose |
|------|---------|
| `css/materialize.css` | **Materialize CSS** - Full CSS framework |
| `css/materialize.min.css` | **Materialize CSS (Minified)** - Production CSS |
| `js/materialize.js` | **Materialize JS** - Full JavaScript framework |
| `js/materialize.min.js` | **Materialize JS (Minified)** - Production JS |
| `LICENSE`, `README.md` | **Framework Documentation** - Materialize license and info |

### static/ (Root Assets)
| File | Purpose |
|------|---------|
| `logo.svg` | **Site Logo** - OG Tech PC SVG logo |
| `logoicon.png` | **Favicon** - Site icon for browser tabs |
| `FROST Gaming PC.mp4` | **Promotional Video** - Featured PC build video |

---

## 📁 product_images/ (Product-Specific Images)

Contains product photos organized by filename matching product names in database:
- PC builds: `3060 ti pc.jpg`, `3070 pc.jpg`, `3080 pc.jpg`, `pc-rtx3050.jpg`, etc.
- Monitors: `acer monitor.jfif`, `asus_monitor.jpg`, `logi monitor.jpg`, `razer monitor.jpg`, etc.
- Peripherals: `g502.jpg`, `logi keyboard.png`, `corsair mouse.jpg`, `hyper headset.jpg`, etc.

---

## 🏗️ Architecture Flow

```
┌─────────────────────────────────────────────────────────────┐
│  USER REQUEST                                               │
└──────────────────┬──────────────────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────────────────┐
│  ROOT PHP FILES (Views)                                     │
│  index.php, product.php, cart.php, admin.php, etc.          │
│  - Include header.php/footer.php                            │
│  - Display UI with Materialize CSS                          │
│  - Include form handlers from includes/                     │
└──────────────────┬──────────────────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────────────────┐
│  includes/ (Controllers)                                    │
│  login.inc.php, signup.inc.php, order.inc.php, etc.         │
│  - Process POST/GET requests                                │
│  - Validate input data                                       │
│  - Call Model methods                                        │
└──────────────────┬──────────────────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────────────────┐
│  classes/ (Models)                                           │
│  member.class.php, Item.class.php, OrderContr.class.php, etc.│
│  - Business logic and data manipulation                      │
│  - Extend Dbhandler for database access                     │
│  - Return data to Views                                      │
└──────────────────┬──────────────────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────────────────┐
│  DATABASE (MySQL via XAMPP)                                  │
│  Database: ogtech                                            │
│  Tables: Members, Items, Orders, OrderItems, Payment, etc.   │
└─────────────────────────────────────────────────────────────┘
```

---

## 🔑 Key Design Patterns

1. **MVC Architecture**: Separation of Models (classes/), Views (root PHP files), and Controllers (includes/)
2. **Class Autoloading**: SPL autoloader eliminates manual require statements
3. **Inheritance**: All database-related classes extend `Dbhandler` for connection management
4. **Factory Pattern**: `Member::CreateMemberFromID()` for object instantiation
5. **Session Management**: User state maintained via PHP sessions with `Member` object storage

---

## 🗄️ Database Tables (from ogtech.sql)

- **Members**: User accounts (MemberID, Username, Email, Password, PrivilegeLevel)
- **Items**: Products (ItemID, Name, Brand, Description, Category, SellingPrice, QuantityInStock, Image)
- **Orders**: Order headers (OrderID, MemberID, CartFlag, OrderDate)
- **OrderItems**: Order line items (OrderItemID, OrderID, ItemID, Quantity, Feedback, Rating)
- **Payment**: Payment records (PaymentID, OrderID, PaymentDate, Amount, PaymentMethod)

---

## 🚀 Entry Points

| User Type | Entry Point | Description |
|-----------|-------------|-------------|
| Customer | `index.php` | Main landing page with product browsing |
| Admin | `admin.php` | Admin dashboard (requires privilegeLevel = 1) |

---

## 📝 Notes

- All database connections use XAMPP default credentials (root/empty password)
- Admin users have `privilegeLevel = 1`, regular users have `privilegeLevel = 0`
- Cart is implemented as an Order with `CartFlag = 1`
- Completed orders have `CartFlag = 0`
- Product reviews are stored in OrderItems table (Feedback and Rating columns)
