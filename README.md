# Ürün API Projesi / Product API Project

## Proje Hakkında / About the Project

Bu proje, Laravel kullanarak ürün verilerini JSON formatında sağlayan bir API sunmaktadır. Veriler, `data.json` dosyasından okunarak API aracılığıyla sağlanır.

This project provides an API that serves product data in JSON format using Laravel. The data is read from the `data.json` file and served through the API.

## Kullanılan Teknolojiler / Technologies Used

- **Laravel**: Ürün verilerini sağlayan backend framework'ü. / The backend framework used to serve product data.
- **JSON**: Verilerin API üzerinden paylaşılmasını sağlamak için kullanılan format. / The format used to share data via the API.

## Nasıl Çalışır? / How It Works

Laravel, `storage/app/data.json` dosyasındaki ürün verilerini bir API aracılığıyla sağlar. Bu API endpoint'ine yapılan istekler, JSON formatında ürün verilerini döndürür.  
Laravel serves product data from the `storage/app/data.json` file through an API. Requests to this API endpoint return the product data in JSON format.

## Başlarken / Getting Started

### Gereksinimler / Requirements

- **PHP** ve **Composer**: Laravel uygulamasını çalıştırmak için gereklidir. / **PHP** and **Composer**: Required to run the Laravel application.

### Kurulum / Installation

1. **Depoyu Klonlayın** / Clone the Repository:
    ```bash
    git clone https://github.com/kendi-username/case-laravel.git
    cd case-laravel
    ```

2. **Laravel Kurulumunu Yapın** / Install Laravel:
    ```bash
    cd case-laravel
    composer install
    ```

3. **Laravel Sunucusunu Başlatın** / Start the Laravel Server:
    ```bash
    php artisan serve
    ```

## API Kullanımı / API Usage

Ürün verilerine şu API endpoint'inden ulaşılabilir: / Product data can be accessed via the following API endpoint:

```bash
http://localhost:8000/api/products
