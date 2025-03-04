# BuddyBot AI Admin Panel

The **BuddyBot AI Admin Panel** is a lightweight and efficient administrative interface designed for managing user accounts and purchases. This tool is ideal for platforms requiring straightforward user and purchase management without unnecessary complexity.

---

## Features

### 👥 **Account Management**
- **Add Accounts**: Manually create new user accounts.
- **Edit Accounts**: Update user details like name, email, or status.
- **Deactivate/Activate Accounts**: Manage user access with a single toggle.
- **Search & Filter**: Quickly locate accounts with advanced filtering options.

### 💳 **Purchase Management**
- **Manage Purchases**: View and manage user purchases.
- **Track Purchase History**: Monitor and review the history of user purchases.
- **Refunds and Adjustments**: Process refunds or make adjustments to purchases.

---

## API

The BuddyBot AI API provides endpoints for managing chats. These endpoints allow for efficient integration and management of these modules.

### **Chat Module**

- **List Chats** \- get all chats.
- **Get a Single Chat** \- retrieve information about a specific chat by providing its `id`.
- **Create a New Chat** \- create a new chat by providing the necessary details.
- **Send a Message in a Chat** \- send a message in a specific chat by providing the chat `id` and the message details.
- **Delete a Chat** \- delete a chat by providing its `id`.

---

## Installation

### Prerequisites
- PHP 8.2+
- Laravel 11
- MySQL
- Composer

### Steps
1. **Clone the repository**:
    ```bash
    git clone https://github.com/sameededitz/buddybot-ai.git
    ```
2. **Navigate to the project directory**:
    ```bash
    cd homedose-ai
    ```
3. **Install dependencies**:
    ```bash
    composer install
    ```
4. **Set up environment variables**:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. **Run migrations and seeders**:
    ```bash
    php artisan migrate --seed
    ```
6. **Start the server**:
    ```bash
    php artisan serve
    ```

---

## Usage

### Admin Features
- **User List**: View a detailed list of all registered users.
- **Manage Premium**: Grant or revoke premium access for specific users.
- **Search and Sort**: Efficiently manage large user bases with search and sorting tools.

---

## Technologies Used
- **Backend**: Laravel 11
- **Frontend**: Livewire 3, Bootstrap
- **Database**: MySQL

---

## Developer Information
- **Developer**: Sameed
- **Instagram**: [@not_sameed52](https://www.instagram.com/not_sameed52/)
- **Discord**: sameededitz
- **Linktree**: [linktr.ee/sameededitz](https://linktr.ee/sameededitz)
- **Company**: TecClubb
  - **Website**: [https://tecclubb.com/](https://tecclubb.com/)
  - **Contact**: tecclubb@gmail.com

---

## Contributing
Contributions are welcome! Fork the repository, create a new branch, and submit a pull request. Open an issue first for major changes.

---

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Contact
For inquiries or support, reach out via:
- **Email**: tecclubb@gmail.com
- **Website**: [https://tecclubb.com/](https://tecclubb.com/)
