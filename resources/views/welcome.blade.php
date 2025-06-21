@extends('layouts.landing-page')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .hero-section {
            background: linear-gradient(135deg, #1e7e34 0%, #155724 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        .nav-tabs {
            border: none;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .nav-tabs .nav-link {
            border: none;
            background: white;
            color: #1e7e34;
            font-weight: 600;
            padding: 1rem 2rem;
            margin: 0 0.5rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link.active {
            background: linear-gradient(135deg, #1e7e34, #155724);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 126, 52, 0.3);
        }

        .tab-content {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            margin-bottom: 3rem;
        }

        .section-title {
            color: #1e7e34;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .card {
            border: none;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            border-radius: 15px;
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #1e7e34, #155724);
            color: white;
            padding: 1.5rem;
            border: none;
        }

        .card-header h5 {
            margin: 0;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .checklist-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 4px solid #1e7e34;
        }

        .checklist-item i {
            color: #1e7e34;
            margin-right: 1rem;
            margin-top: 0.2rem;
            font-size: 1.2rem;
            min-width: 20px;
        }

        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline-item {
            display: flex;
            margin-bottom: 2rem;
            align-items: flex-start;
        }

        .timeline-marker {
            width: 40px;
            height: 40px;
            background: #1e7e34;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 1.5rem;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(30, 126, 52, 0.3);
        }

        .timeline-content {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            flex: 1;
        }

        .timeline-content h5 {
            color: #1e7e34;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .highlight-box {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border: 1px solid #b8daff;
            border-radius: 15px;
            padding: 1.5rem;
            margin: 2rem 0;
        }

        .highlight-box h5 {
            color: #155724;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .warning-box {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            border: 1px solid #ffc107;
            border-radius: 15px;
            padding: 1.5rem;
            margin: 2rem 0;
        }

        .warning-box h5 {
            color: #856404;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #1e7e34, #155724);
            border: none;
            padding: 0.4rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(30, 126, 52, 0.3);
        }

        .requirements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .requirement-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #1e7e34;
        }

        .requirement-card h6 {
            color: #1e7e34;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .requirement-list {
            list-style: none;
            padding: 0;
        }

        .requirement-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .requirement-list li i {
            color: #1e7e34;
            margin-right: 0.5rem;
            margin-top: 0.2rem;
            font-size: 0.8rem;
        }

        body {
            background: linear-gradient(135deg, #587133 0%, #badfbd 100%) min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }

        .news-section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            color: #4f4d4d;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, #e8f4f8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: #437335fc;
            background-clip: text;
        }

        .section-title p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .news-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 0;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            overflow: hidden;
            position: relative;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .news-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .news-card:hover::before {
            opacity: 1;
        }

        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .news-card:hover .news-image {
            transform: scale(1.05);
        }

        .news-content {
            padding: 25px;
            color: white;
        }

        .news-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: rgba(0, 0, 0, 0.8);
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-date {
            font-size: 0.9rem;
            color: rgba(3, 3, 3, 0.7);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .news-description {
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
            color: rgba(86, 86, 86, 0.8);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .read-more {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .read-more::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(135deg, #587133 0%, #badfbd 100%) transition: width 0.3s ease;
        }

        .read-more:hover {
            color: #fff;
            transform: translateX(5px);
        }

        .read-more:hover::after {
            width: 100%;
        }

        .slide-navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin-top: 50px;
        }

        .slide-btn {
            width: 50px;
            height: 50px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .slide-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            transform: scale(1.1);
        }

        .slide-indicators {
            display: flex;
            gap: 10px;
        }

        .slide-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .slide-dot.active {
            background: white;
            transform: scale(1.2);
        }

        .slide-dot:hover {
            background: rgba(255, 255, 255, 0.6);
            transform: scale(1.1);
        }

        .slide-info {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            margin: 0 20px;
        }

        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }

            .news-card {
                margin-bottom: 30px;
            }

            .slide-navigation {
                margin-top: 40px;
            }

            .slide-btn {
                width: 45px;
                height: 45px;
            }
        }

        .light-background {
            background: #f8f9fa;
        }

        .services {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .section-title p {
            color: #6c757d;
            font-size: 1.1rem;
        }

        .announcement-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #3498db;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .announcement-card:hover {
            transform: translateY(-5px);
        }

        .announcement-title {
            color: #2c3e50;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .announcement-title i {
            color: #3498db;
            margin-right: 10px;
        }

        .announcement-content {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .date-badge {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .schedule-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .schedule-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .schedule-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .open-registration {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
        }

        .close-registration {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }

        .schedule-title {
            color: #2c3e50;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .schedule-date {
            color: #3498db;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .schedule-time {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .category-grid {
            margin-top: 50px;
        }

        .category-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .category-icon {
            color: #3498db;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .category-title {
            color: #2c3e50;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .category-amount {
            color: #27ae60;
            font-size: 1.2rem;
            font-weight: 700;
            margin-top: 10px;
        }

        .read-more {
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            margin-top: 10px;
            transition: color 0.3s ease;
        }

        .read-more:hover {
            color: #2980b9;
        }

        .read-more i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .read-more:hover i {
            transform: translateX(3px);
        }

        :root {
            --primary-color: #2c7a7b;
            --secondary-color: rgb(27, 115, 53);
            --accent-color: rgb(53, 134, 54);
            --text-dark: #2d3748;
            --text-light: #718096;
            --bg-light: #f7fafc;
        }

        .requirements-section {
            padding: 80px 0;
            background: #e4eee1;
            position: relative;
            overflow: hidden;
        }

        .requirements-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23e2e8f0" stroke-width="0.5" opacity="0.3"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.1;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .documents-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
            position: relative;
            z-index: 2;
        }

        .document-card {
            background: white;
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(44, 122, 123, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .document-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .document-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(44, 122, 123, 0.15);
            border-color: var(--accent-color);
        }

        .document-card:hover::before {
            transform: scaleX(1);
        }

        .document-icon {
            width: 120px;
            height: 140px;
            margin: 0 auto 25px;
            position: relative;
            perspective: 1000px;
        }

        .clipboard {
            width: 100%;
            height: 100%;
            background: linear-gradient(145deg, var(--primary-color), var(--secondary-color));
            border-radius: 15px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.3s ease;
        }

        .document-card:hover .clipboard {
            transform: rotateY(5deg) rotateX(5deg);
        }

        .clipboard::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 16px;
            background: var(--accent-color);
            border-radius: 8px;
            z-index: 2;
        }

        .clipboard::after {
            content: '';
            position: absolute;
            top: -4px;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 8px;
            background: white;
            border-radius: 4px;
            z-index: 3;
        }

        .paper {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            background: white;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .paper-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 5px;
        }

        .paper-text {
            font-size: 0.7rem;
            color: var(--text-dark);
            font-weight: 600;
            text-align: center;
            line-height: 1.2;
        }

        .document-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .document-description {
            font-size: 0.9rem;
            color: var(--text-light);
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .download-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .download-btn:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(44, 122, 123, 0.3);
            color: white;
        }

        .download-btn i {
            font-size: 1rem;
        }

        .additional-info {
            background: white;
            border-radius: 20px;
            padding: 40px;
            margin-top: 60px;
            box-shadow: 0 10px 30px rgba(44, 122, 123, 0.1);
            position: relative;
            z-index: 2;
        }

        .info-title {
            color: var(--primary-color);
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-list li:last-child {
            border-bottom: none;
        }

        .info-list i {
            color: var(--secondary-color);
            font-size: 1.2rem;
            min-width: 20px;
        }

        .contact-card {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            margin-top: 40px;
        }

        .contact-card h4 {
            margin-bottom: 15px;
            font-weight: 700;
        }

        .contact-card p {
            margin-bottom: 8px;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .documents-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .document-card {
                padding: 25px 15px;
            }

            .additional-info {
                padding: 25px;
            }
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            background: linear-gradient(135deg, var(--accent-color), var(--secondary-color));
            opacity: 0.1;
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 400px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: -2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: -4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        .features.section {
            padding: 60px 0;
            background: linear-gradient(194deg, rgb(227, 239, 220) 0%, #fff 90%);
            position: relative;
            overflow: hidden;
        }

        .features.section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.1"><polygon points="1000,100 1000,0 0,100"/></svg>') no-repeat;
            background-size: cover;
        }

        .section-title {
            text-align: center;
            margin-bottom: 1px;
            position: relative;
            z-index: 2;
        }

        .section-title h2 {
            font-size: 3rem;
            font-weight: 700;
            color: rgb(33, 101, 46);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-190%);
            width: 60px;
            height: 4px;
            background: linear-gradient(45deg, rgb(187, 206, 79), rgb(16, 75, 25));
            border-radius: 2px;
        }

        .section-title p {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 600px;
            margin: 0 auto;
        }

        .nav-tabs {
            border: none;
            justify-content: center;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
        }

        .nav-tabs .nav-item {
            margin: 0 5px;
        }

        .nav-tabs .nav-link {
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
            color: #34495e;
            font-weight: 600;
            transition: all 0.3s ease;
            background: transparent;
            position: relative;
            overflow: hidden;
        }

        .nav-tabs .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: #40922f;
            transition: left 0.3s ease;
            z-index: -1;
        }

        .nav-tabs .nav-link:hover::before,
        .nav-tabs .nav-link.active::before {
            left: 0;
        }

        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link.active {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
        }

        .nav-tabs .nav-link h4 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }

        .tab-content {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 50px;
            margin-top: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
        }

        .tab-pane h3 {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 25px;
            font-size: 2rem;
            position: relative;
        }

        .tab-pane h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            border-radius: 2px;
        }

        .tab-pane p.fst-italic {
            font-size: 1.1rem;
            color: #7f8c8d;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .tab-pane ul {
            list-style: none;
            padding: 0;
        }

        .tab-pane li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            background: rgb(158, 192, 117);
            border-radius: 10px;
            border-left: 4px solid #38622d;
            transition: all 0.3s ease;
        }

        .tab-pane li:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.1);
        }

        .tab-pane li i {
            color: #27ae60;
            font-size: 1.2rem;
            margin-right: 15px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .tab-pane li span {
            color: #34495e;
            line-height: 1.6;
            font-weight: 500;
        }

        .img-fluid {
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .img-fluid:hover {
            transform: scale(1.05);
        }

        .btn-download {
            display: inline-flex;
            align-items: center;
            padding: 12px 25px;
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
        }

        .btn-download:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(231, 76, 60, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-download i {
            margin-right: 8px;
        }

        .highlight-box {
            background: #72a255;
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .highlight-box h5 {
            margin-bottom: 10px;
            font-weight: 700;
        }

        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2rem;
            }

            .nav-tabs {
                flex-direction: column;
                align-items: center;
            }

            .nav-tabs .nav-item {
                margin: 5px 0;
                width: 100%;
            }

            .nav-tabs .nav-link {
                text-align: center;
                width: 100%;
            }

            .tab-content {
                padding: 30px 20px;
            }
        }
    </style>
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Kesejahteraan Rakyat
                            </div>

                            <h1 class="mb-4">
                                Sistem Informasi Pengajuan Hibah <br />
                                <span class="accent-text">Kabupaten Kepulauan Meranti</span>
                            </h1>

                            <p class="mb-3 mb-md-5">
                                Sistem Informasi Dana Hibah membantu berbasis web pengelolaan pengajuan, verifikasi, dan
                                pencairan dana hibah secara efisien di Kabupaten Kepulauan Meranti. Platform ini mempermudah
                                lembaga atau individu dalam memantau status permohonan serta
                                transparansi penggunaan anggaran.
                            </p>

                            <div class="hero-buttons">
                                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Ajukan Sekarang</a>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-play-circle me-1"></i>
                                    Tutorial Pengajuan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('img/logo.png') }}" alt="Lambang Meranti" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta mt-3">Sistem Informasi Dana Hibah</span>
                        <h2 class="about-title">
                            Tentang Kami
                        </h2>
                        <p class="about-description">
                            Sistem Informasi Pengajuan Dana Hibah membantu lembaga dan
                            individu dalam mengajukan permohonan dana hibah secara cepat, transparan, dan efisien.
                            Dengan sistem ini, pengguna dapat dengan mudah mengunggah dokumen persyaratan, memantau
                            status pengajuan, serta mendapatkan informasi terbaru terkait proses seleksi.
                        </p>

                        <div class="row feature-list-wrapper">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Pengajuan dana hibah lebih mudah dan cepat
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Proses seleksi yang transparan dan akuntabel
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Notifikasi real-time mengenai status pengajuan
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Dukungan berbagai kategori hibah sesuai kebutuhan
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Terintegrasi dengan sistem verifikasi dan evaluasi
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        Laporan dan riwayat pengajuan tersimpan dengan aman
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="info-wrapper">
                            <div class="row gy-4">
                                <div class="col-lg-5">
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-info d-flex align-items-center gap-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="img/about-5.webp" alt="Business Meeting"
                                    class="img-fluid main-image rounded-4" />
                                <img src="img/about-2.webp" alt="Team Discussion"
                                    class="img-fluid small-image rounded-4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class="features section">
            <!-- Section Title -->
            <section class="hero-section">
                <div class="container" data-aos="fade-up">
                    <h1><i class="bi bi-mosque"></i> Hibah Keagamaan</h1>
                    <p>Panduan Lengkap Pengajuan Hibah untuk Masjid, Mushola, dan Kegiatan Keagamaan<br>
                        Kabupaten Kepulauan Meranti</p>
                </div>
            </section>

            <!-- Main Content -->
            <section class="py-5">
                <div class="container">
                    <!-- Navigation Tabs -->
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#syarat-prosedur">
                                    <h5><i class="bi bi-file-text"></i> Syarat & Prosedur</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#dokumen-persyaratan">
                                    <h5><i class="bi bi-folder"></i> Dokumen Persyaratan</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tahap-seleksi">
                                    <h5><i class="bi bi-diagram-3"></i> Tahap Seleksi</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#pertanggungjawaban">
                                    <h5><i class="bi bi-clipboard-check"></i> Pertanggungjawaban</h5>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                        <!-- Syarat & Prosedur Tab -->
                        <div class="tab-pane fade active show" id="syarat-prosedur">
                            <h3 class="section-title">Syarat & Prosedur Pengajuan Hibah Keagamaan</h3>

                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <p class="text-center text-muted mb-4">
                                        Hibah keagamaan meliputi bantuan untuk masjid, mushola, dan kegiatan keagamaan yang
                                        diajukan melalui Sekretariat Daerah sesuai dengan urusan pemerintahan umum.
                                    </p>

                                    <div class="highlight-box">
                                        <h5><i class="bi bi-info-circle"></i> Informasi Penting</h5>
                                        <p class="mb-2"><strong>Penerima Hibah:</strong> Organisasi keagamaan, pengurus
                                            masjid/mushola, dan lembaga keagamaan yang memenuhi syarat.</p>
                                        <p class="mb-0"><strong>Pengelola:</strong> Sekretariat Daerah Kabupaten
                                            Kepulauan Meranti</p>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="bi bi-calendar-event"></i> Jadwal Pengajuan</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="checklist-item">
                                                <i class="bi bi-calendar-check"></i>
                                                <div>
                                                    <strong>APBD Tahun Berikutnya:</strong><br>
                                                    Usulan disampaikan paling lambat bulan Juni
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-calendar-plus"></i>
                                                <div>
                                                    <strong>Perubahan APBD:</strong><br>
                                                    Usulan disampaikan paling lambat bulan April tahun berkenaan
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="bi bi-list-check"></i> Ketentuan Umum</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="checklist-item">
                                                <i class="bi bi-check-circle"></i>
                                                <div>
                                                    <strong>Bentuk Hibah:</strong> Dapat berupa uang, barang, atau jasa
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-check-circle"></i>
                                                <div>
                                                    <strong>Tujuan:</strong> Mendukung kegiatan keagamaan dan pembangunan
                                                    sarana ibadah
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-check-circle"></i>
                                                <div>
                                                    <strong>Evaluasi:</strong> Tim evaluasi menilai aspek legalitas,
                                                    administratif, dan substansi kegiatan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dokumen Persyaratan Tab -->
                        <div class="tab-pane fade" id="dokumen-persyaratan">
                            <h3 class="section-title">Dokumen Persyaratan Proposal</h3>

                            <div class="requirements-grid">
                                <div class="requirement-card">
                                    <h6><i class="bi bi-file-earmark-text"></i> Aspek Legalitas (Pasal 12 ayat 3)</h6>
                                    <ul class="requirement-list">
                                        <li><i class="bi bi-dot"></i> Nama Badan/Lembaga Organisasi Pemohon</li>
                                        <li><i class="bi bi-dot"></i> Akta Pendirian Organisasi</li>
                                        <li><i class="bi bi-dot"></i> NPWP Organisasi Aktif</li>
                                        <li><i class="bi bi-dot"></i> Buku Rekening Organisasi</li>
                                    </ul>
                                </div>

                                <div class="requirement-card">
                                    <h6><i class="bi bi-folder"></i> Aspek Administratif (Pasal 12 ayat 4)</h6>
                                    <ul class="requirement-list">
                                        <li><i class="bi bi-dot"></i> Proposal Kegiatan/Pembangunan</li>
                                        <li><i class="bi bi-dot"></i> Rencana Anggaran Biaya (RAB)</li>
                                        <li><i class="bi bi-dot"></i> Surat Permohonan resmi</li>
                                        <li><i class="bi bi-dot"></i> Surat Keterangan dari Kelurahan/Desa</li>
                                    </ul>
                                </div>

                                <div class="requirement-card">
                                    <h6><i class="bi bi-camera"></i> Dokumentasi</h6>
                                    <ul class="requirement-list">
                                        <li><i class="bi bi-dot"></i> Foto kondisi saat ini (untuk renovasi/pembangunan)
                                        </li>
                                        <li><i class="bi bi-dot"></i> Foto kegiatan sebelumnya (untuk kegiatan rutin)</li>
                                        <li><i class="bi bi-dot"></i> Sketsa/denah bangunan (jika pembangunan)</li>
                                    </ul>
                                </div>

                                <div class="requirement-card">
                                    <h6><i class="bi bi-clipboard-data"></i> Persyaratan Substantif (Pasal 12 ayat 5)</h6>
                                    <ul class="requirement-list">
                                        <li><i class="bi bi-dot"></i> Program sesuai dengan tujuan (dijelaskan dalam
                                            proposal)</li>
                                        <li><i class="bi bi-dot"></i> Manfaat jelas untuk jamaah (dijelaskan dalam
                                            proposal)</li>
                                        <li><i class="bi bi-dot"></i> Timeline pelaksanaan realistis (dijelaskan dalam
                                            proposal)</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="warning-box">
                                <h5><i class="bi bi-exclamation-triangle"></i> Catatan Penting</h5>
                                <p class="mb-2">• Semua dokumen harus asli atau fotokopi yang dilegalisir</p>
                                <p class="mb-2">• Proposal harus mencakup latar belakang, tujuan, manfaat, dan rencana
                                    pelaksanaan</p>
                                <p class="mb-0">• RAB harus detail dan sesuai dengan harga pasar setempat</p>
                            </div>
                        </div>

                        <!-- Tahap Seleksi Tab -->
                        <div class="tab-pane fade" id="tahap-seleksi">
                            <h3 class="section-title">Tahapan Proses Seleksi</h3>

                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker">1</div>
                                    <div class="timeline-content">
                                        <h5>Pengajuan Proposal</h5>
                                        <p>Pemohon menyerahkan proposal lengkap dengan semua dokumen persyaratan ke
                                            Sekretariat Daerah Kabupaten Kepulauan Meranti.</p>
                                        <small class="text-muted">Waktu: Sesuai jadwal pengajuan</small>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-marker">2</div>
                                    <div class="timeline-content">
                                        <h5>Verifikasi Administratif</h5>
                                        <p>Tim verifikasi memeriksa kelengkapan dokumen dan kesesuaian dengan format yang
                                            ditentukan.</p>
                                        <small class="text-muted">Waktu: 7-14 hari kerja</small>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-marker">3</div>
                                    <div class="timeline-content">
                                        <h5>Evaluasi Tim Penilai</h5>
                                        <p>Tim evaluasi menilai aspek legalitas, administratif, dan substansi kegiatan
                                            dengan tingkat kewajaran biaya.</p>
                                        <small class="text-muted">Waktu: 14-21 hari kerja</small>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-marker">4</div>
                                    <div class="timeline-content">
                                        <h5>Verifikasi Lapangan</h5>
                                        <p>Tim melakukan kunjungan ke lokasi untuk memastikan kondisi riil dan kebutuhan
                                            hibah.</p>
                                        <small class="text-muted">Waktu: Sesuai jadwal tim</small>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-marker">5</div>
                                    <div class="timeline-content">
                                        <h5>Penetapan Penerima</h5>
                                        <p>Bupati menetapkan penerima hibah berdasarkan rekomendasi tim evaluasi dan
                                            ketersediaan anggaran.</p>
                                        <small class="text-muted">Waktu: Setelah evaluasi selesai</small>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-marker">6</div>
                                    <div class="timeline-content">
                                        <h5>Penerbitan NPHD</h5>
                                        <p>Naskah Perjanjian Hibah Daerah (NPHD) diterbitkan dan ditandatangani oleh kedua
                                            belah pihak.</p>
                                        <small class="text-muted">Waktu: Setelah penetapan</small>
                                    </div>
                                </div>
                            </div>

                            <div class="highlight-box">
                                <h5><i class="bi bi-info-circle"></i> Kriteria Penilaian</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Aspek Legalitas (25%)</strong></p>
                                        <ul class="small">
                                            <li>Kelengkapan dokumen organisasi</li>
                                            <li>Status hukum pemohon</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Aspek Administratif (25%)</strong></p>
                                        <ul class="small">
                                            <li>Kelengkapan proposal</li>
                                            <li>Kewajaran anggaran</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Aspek Substansi (35%)</strong></p>
                                        <ul class="small">
                                            <li>Manfaat untuk masyarakat</li>
                                            <li>Kesesuaian dengan program daerah</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Aspek Teknis (15%)</strong></p>
                                        <ul class="small">
                                            <li>Feasibilitas pelaksanaan</li>
                                            <li>Timeline realistis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pertanggungjawaban Tab -->
                        <div class="tab-pane fade" id="pertanggungjawaban">
                            <h3 class="section-title">Kewajiban Pertanggungjawaban</h3>

                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <p class="text-center text-muted mb-4">
                                        Penerima hibah bertanggung jawab secara formil dan materil atas penggunaan hibah
                                        yang diterima sesuai dengan ketentuan yang berlaku.
                                    </p>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="bi bi-file-earmark-check"></i> Dokumen Pertanggungjawaban</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="checklist-item">
                                                <i class="bi bi-file-text"></i>
                                                <div>
                                                    <strong>Laporan Penggunaan Hibah:</strong><br>
                                                    Laporan rinci penggunaan hibah kepada Bupati melalui Sekretariat Daerah
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-file-earmark-text"></i>
                                                <div>
                                                    <strong>Surat Pertanggungjawaban:</strong><br>
                                                    Surat pernyataan bahwa hibah telah digunakan sesuai dengan NPHD
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-receipt"></i>
                                                <div>
                                                    <strong>Bukti Pengeluaran:</strong><br>
                                                    Kuitansi, nota, dan bukti pengeluaran yang lengkap dan sah
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-camera"></i>
                                                <div>
                                                    <strong>Dokumentasi Kegiatan:</strong><br>
                                                    Foto-foto pelaksanaan kegiatan atau hasil pembangunan
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="warning-box">
                                        <h5><i class="bi bi-clock"></i> Batas Waktu Penting</h5>
                                        <p class="mb-2"><strong>Pertanggungjawaban:</strong> Maksimal 30 hari setelah
                                            hibah diterima</p>
                                        <p class="mb-0"><strong>Pengembalian:</strong> Hibah yang tidak digunakan sesuai
                                            tujuan wajib dikembalikan</p>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="bi bi-exclamation-triangle"></i> Sanksi</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-3">Penerima hibah yang tidak memenuhi kewajiban dapat dikenakan
                                                sanksi:</p>
                                            <div class="checklist-item">
                                                <i class="bi bi-x-circle"></i>
                                                <div>
                                                    <strong>Penghentian Hibah:</strong> Pencairan hibah dapat dihentikan
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-arrow-return-left"></i>
                                                <div>
                                                    <strong>Pengembalian Dana:</strong> Wajib mengembalikan hibah yang telah
                                                    diterima
                                                </div>
                                            </div>
                                            <div class="checklist-item">
                                                <i class="bi bi-ban"></i>
                                                <div>
                                                    <strong>Blacklist:</strong> Tidak dapat mengajukan hibah di tahun
                                                    berikutnya
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Download Section -->
                    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="card" style="max-width: 3000px; margin: 0 auto;">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-download"></i> Unduh Dokumen</h5>
                                <p class="card-text text-muted">Dokumen lengkap Peraturan Bupati tentang Pedoman Hibah dan
                                    Bantuan Sosial</p>
                                <a href="#" class="btn btn-primary btn-lg">
                                    <i class="bi bi-file-pdf"></i>
                                    Download Perbup No. 32 Tahun 2022
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Features Section -->

            <!-- Stats Section -->
            <section id="stats" class="stats section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Proposal diproses</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Proposal direvisi</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Proposal disetujui</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Proposal ditolak</p>
                            </div>
                        </div>
                        <!-- End Stats Item -->
                    </div>
                </div>
            </section>
            <!-- /Stats Section -->

            <!-- Services Section -->
            <section id="services" class="services section light-background">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Pengumuman Hibah</h2>
                    <p>Informasi terbaru mengenai program hibah yang tersedia</p>
                </div>
                <!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <!-- Announcement Card -->
                    <div class="announcement-card" data-aos="fade-up" data-aos-delay="150">
                        <div class="announcement-title">
                            <i class="bi bi-megaphone-fill"></i>
                            Pembukaan Program Hibah Tahun 2025
                        </div>
                        <div class="announcement-content">
                            Yayasan dengan bangga mengumumkan pembukaan program hibah untuk tahun 2025. Program ini
                            ditujukan untuk mendukung berbagai kegiatan sosial, pendidikan, dan pembangunan infrastruktur
                            yang bermanfaat bagi masyarakat. Kami mengundang seluruh organisasi, lembaga, dan komunitas yang
                            memenuhi syarat untuk mengajukan proposal hibah sesuai dengan kategori yang tersedia.
                        </div>
                        <span class="date-badge">
                            <i class="bi bi-calendar-event"></i> Diumumkan: 21 Juni 2025
                        </span>
                    </div>

                    <!-- Schedule Cards -->
                    <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-6">
                            <div class="schedule-card">
                                <div class="schedule-icon open-registration">
                                    <i class="bi bi-calendar-plus"></i>
                                </div>
                                <div class="schedule-title">Pembukaan Pendaftaran</div>
                                <div class="schedule-date">1 Juli 2025</div>
                                <div class="schedule-time">Pukul 08:00 WIB</div>
                                <p class="mt-3 text-muted">Pendaftaran dan pengajuan proposal hibah dibuka untuk semua
                                    kategori yang tersedia.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="schedule-card">
                                <div class="schedule-icon close-registration">
                                    <i class="bi bi-calendar-x"></i>
                                </div>
                                <div class="schedule-title">Penutupan Pengajuan</div>
                                <div class="schedule-date">31 Agustus 2025</div>
                                <div class="schedule-time">Pukul 17:00 WIB</div>
                                <p class="mt-3 text-muted">Batas akhir pengajuan proposal hibah. Tidak ada perpanjangan
                                    waktu.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Category Grid -->
                    <section class="news-section">
                        <div class="container">
                            <div class="section-title">
                                <h2>Berita Terkini</h2>
                                <p>Informasi terbaru dan update kegiatan terkini</p>
                            </div>

                            <div class="news-grid">
                                <div class="row g-4">
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                        <div class="news-card">
                                            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=400&h=200&fit=crop"
                                                alt="Berita 1" class="news-image">
                                            <div class="news-content">
                                                <div class="news-date">
                                                    <i class="bi bi-calendar"></i>
                                                    20 Juni 2025
                                                </div>
                                                <h3 class="news-title">Pembangunan Masjid Al-Barokah Telah Selesai</h3>
                                                <p class="news-description">Alhamdulillah, pembangunan Masjid Al-Barokah di
                                                    Desa Sungai Pinang telah selesai dan siap digunakan untuk kegiatan
                                                    ibadah masyarakat. Masjid ini dapat menampung hingga 300 jamaah.</p>
                                                <a href="#" class="read-more">Selengkapnya <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <div class="news-card">
                                            <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?w=400&h=200&fit=crop"
                                                alt="Berita 2" class="news-image">
                                            <div class="news-content">
                                                <div class="news-date">
                                                    <i class="bi bi-calendar"></i>
                                                    18 Juni 2025
                                                </div>
                                                <h3 class="news-title">Program Bantuan UMKM Capai Target 100 Penerima</h3>
                                                <p class="news-description">Program bantuan modal usaha mikro, kecil dan
                                                    menengah (UMKM) telah berhasil menyalurkan bantuan kepada 100 pelaku
                                                    usaha di berbagai desa. Bantuan berupa modal kerja dan pelatihan
                                                    manajemen usaha.</p>
                                                <a href="#" class="read-more">Selengkapnya <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                        <div class="news-card">
                                            <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=400&h=200&fit=crop"
                                                alt="Berita 3" class="news-image">
                                            <div class="news-content">
                                                <div class="news-date">
                                                    <i class="bi bi-calendar"></i>
                                                    15 Juni 2025
                                                </div>
                                                <h3 class="news-title">Perpustakaan Desa Mendapat Bantuan 1000 Buku</h3>
                                                <p class="news-description">Perpustakaan Desa Rimbo Panjang mendapat
                                                    bantuan 1000 buku bacaan dan referensi untuk meningkatkan minat baca
                                                    masyarakat, khususnya anak-anak dan remaja di desa tersebut.</p>
                                                <a href="#" class="read-more">Selengkapnya <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                                        <div class="news-card">
                                            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=400&h=200&fit=crop"
                                                alt="Berita 4" class="news-image">
                                            <div class="news-content">
                                                <div class="news-date">
                                                    <i class="bi bi-calendar"></i>
                                                    12 Juni 2025
                                                </div>
                                                <h3 class="news-title">Sumur Bor Baru Atasi Krisis Air Bersih</h3>
                                                <p class="news-description">Pembangunan sumur bor di Desa Tanjung Harapan
                                                    telah selesai dan berhasil mengatasi masalah kekurangan air bersih.
                                                    Debit air mencapai 50 liter per menit dan dapat melayani 200 kepala
                                                    keluarga.</p>
                                                <a href="#" class="read-more">Selengkapnya <i
                                                        class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide Navigation -->
                            <div class="slide-navigation" data-aos="fade-up" data-aos-delay="500">
                                <div class="slide-btn" id="prevBtn">
                                    <i class="bi bi-chevron-left"></i>
                                </div>

                                <div class="slide-indicators">
                                    <div class="slide-dot active" data-slide="0"></div>
                                    <div class="slide-dot" data-slide="1"></div>
                                    <div class="slide-dot" data-slide="2"></div>
                                </div>

                                <div class="slide-info">
                                    <span id="currentSlide">1</span> / <span id="totalSlides">3</span>
                                </div>

                                <div class="slide-btn" id="nextBtn">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Services Section -->
                    <section class="requirements-section">

                        <div class="container">
                            <div class="section-header" data-aos="fade-up">
                                <h2 class="section-title">Persyaratan Dokumen Hibah</h2>
                                <p class="section-subtitle">
                                    Silakan lihat atau download contoh dokumen pendukung pengajuan permohonan hibah di bawah
                                    ini
                                </p>
                            </div>

                            <div class="documents-grid">
                                <!-- Surat Permohonan Walikota -->
                                <div class="document-card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="document-icon">
                                        <div class="clipboard">
                                            <div class="paper">
                                                <i class="bi bi-person-badge paper-icon"></i>
                                                <div class="paper-text">
                                                    Yth.<br>
                                                    Bapak<br>
                                                    Walikota
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="document-title">Surat Permohonan Walikota</h3>
                                    <p class="document-description">
                                        Template surat permohonan hibah yang ditujukan kepada Walikota sebagai dokumen
                                        formal pengajuan
                                    </p>
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download Template
                                    </a>
                                </div>

                                <!-- Proposal -->
                                <div class="document-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="document-icon">
                                        <div class="clipboard">
                                            <div class="paper">
                                                <i class="bi bi-file-earmark-text paper-icon"></i>
                                                <div class="paper-text">
                                                    PRO<br>
                                                    posal
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="document-title">Proposal</h3>
                                    <p class="document-description">
                                        Format proposal kegiatan yang berisi latar belakang, tujuan, rencana kegiatan, dan
                                        manfaat program
                                    </p>
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download Template
                                    </a>
                                </div>

                                <!-- RAB -->
                                <div class="document-card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="document-icon">
                                        <div class="clipboard">
                                            <div class="paper">
                                                <i class="bi bi-calculator paper-icon"></i>
                                                <div class="paper-text">
                                                    RAB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="document-title">RAB</h3>
                                    <p class="document-description">
                                        Rencana Anggaran Biaya yang detail dan terperinci untuk setiap item kegiatan yang
                                        akan dilaksanakan
                                    </p>
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download Template
                                    </a>
                                </div>

                                <!-- Domisili Dari Lurah -->
                                <div class="document-card" data-aos="fade-up" data-aos-delay="400">
                                    <div class="document-icon">
                                        <div class="clipboard">
                                            <div class="paper">
                                                <i class="bi bi-geo-alt paper-icon"></i>
                                                <div class="paper-text">
                                                    DOMISILI<br>
                                                    DARI<br>
                                                    LURAH
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="document-title">Domisili Dari Lurah</h3>
                                    <p class="document-description">
                                        Surat keterangan domisili dari Lurah setempat sebagai bukti keberadaan organisasi di
                                        wilayah tersebut
                                    </p>
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download Template
                                    </a>
                                </div>

                                <!-- Surat Keterangan -->
                                <div class="document-card" data-aos="fade-up" data-aos-delay="500">
                                    <div class="document-icon">
                                        <div class="clipboard">
                                            <div class="paper">
                                                <i class="bi bi-file-earmark-check paper-icon"></i>
                                                <div class="paper-text">
                                                    SKet<br>
                                                    Kementerian<br>
                                                    Kemenko
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="document-title">Surat Keterangan</h3>
                                    <p class="document-description">
                                        Surat keterangan dari Kementerian terkait atau instansi berwenang sebagai legalitas
                                        organisasi
                                    </p>
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download Template
                                    </a>
                                </div>

                                <!-- Contoh File KTP -->
                                <div class="document-card" data-aos="fade-up" data-aos-delay="600">
                                    <div class="document-icon">
                                        <div class="clipboard">
                                            <div class="paper">
                                                <i class="bi bi-credit-card paper-icon"></i>
                                                <div class="paper-text">
                                                    KTP<br>
                                                    Ketua<br>
                                                    Sekretaris<br>
                                                    Bendahara
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="document-title">Contoh File KTP</h3>
                                    <p class="document-description">
                                        Template pengumpulan KTP Ketua, Sekretaris, dan Bendahara organisasi sebagai
                                        identitas pengurus
                                    </p>
                                    <a href="#" class="download-btn">
                                        <i class="bi bi-download"></i>
                                        Download Template
                                    </a>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="additional-info" data-aos="fade-up" data-aos-delay="700">
                                <h3 class="info-title">Informasi Penting</h3>
                                <ul class="info-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Semua dokumen harus dalam format PDF dengan ukuran maksimal 5MB per
                                            file</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Dokumen yang diunggah harus jelas dan terbaca dengan baik</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Pastikan semua dokumen telah ditandatangani dan distempel resmi</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Kelengkapan dokumen akan mempengaruhi proses evaluasi proposal</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Dokumen yang tidak sesuai template akan dikembalikan untuk diperbaiki</span>
                                    </li>
                                </ul>

                                <div class="contact-card">
                                    <h4>Catatan</h4>
                                    <p>Contoh dokumen pendukung di atas hanya sebagai acuan atau gambaran untuk mengetahui
                                        bagaimana format dokumen pendukung yang dimaksud dalam sistem ini. Selayaknya
                                        contoh, untuk beberapa dokumen di atas silakan ditiru, juga dipersilakan menggunakan
                                        format sendiri sesuai dengan ketentuan.
                                        Utamanya adalah terpenuhinya dokumen-dokumen yang disyaratkan dalam pengajuan
                                        permohonan hibah keagamaan.</p>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!-- Contact Section -->
                    <section id="contact" class="contact section light-background">
                        <!-- Section Title -->
                        <div class="container section-title" data-aos="fade-up">
                            <h2>Kontak</h2>
                            <p>
                                Masukkan dan pertanyaan anda yang lain bisa salurkan disini
                            </p>
                        </div>
                        <!-- End Section Title -->

                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row g-4 g-lg-5">
                                <div class="col-lg-5">
                                    <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                                        <h3>Info Lanjut</h3>
                                        <p>
                                            Jika Anda memiliki pertanyaan atau membutuhkan bantuan terkait aplikasi
                                            pengajuan,
                                            silakan hubungi kami melalui informasi di bawah ini.
                                        </p>

                                        <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                            <div class="icon-box">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h4>Lokasi</h4>
                                                <p>Kepulauan Meranti</p>
                                                <p>Meranti, Selatpanjang</p>
                                            </div>
                                        </div>

                                        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                            <div class="icon-box">
                                                <i class="bi bi-telephone"></i>
                                            </div>
                                            <div class="content">
                                                <h4>Phone Number</h4>
                                                <p>+1 5589 55488 55</p>
                                            </div>
                                        </div>

                                        <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                            <div class="icon-box">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <h4>Email Address</h4>
                                                <p>info@meranti.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                                        <h3>Kontak</h3>
                                        <p>
                                            Jika Anda memiliki pertanyaan atau membutuhkan bantuan terkait aplikasi
                                            pengajuan,
                                            silakan hubungi kami melalui informasi di bawah ini.
                                        </p>

                                        <form action="{{ route('contact.submit') }}" method="POST"
                                            class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                            @csrf
                                            <div class="row gy-4">
                                                <div class="col-md-6">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Nama" required="" />
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Email" required="" />
                                                </div>

                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="subject"
                                                        placeholder="Subjek" required="" />
                                                </div>

                                                <div class="col-12">
                                                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                                                </div>

                                                <div class="col-12 text-center">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">
                                                        Your message has been sent.
                                                        Thank you!
                                                    </div>

                                                    <button type="submit" class="btn">
                                                        Kirim
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Contact Section -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
                    <script>
                        // Initialize AOS
                        AOS.init({
                            duration: 1000,
                            easing: 'ease-in-out',
                            once: true,
                            mirror: false
                        });

                        // Add interactive effects
                        document.querySelectorAll('.document-card').forEach(card => {
                            card.addEventListener('mouseenter', function() {
                                this.style.transform = 'translateY(-10px) scale(1.02)';
                            });

                            card.addEventListener('mouseleave', function() {
                                this.style.transform = 'translateY(0) scale(1)';
                            });
                        });

                        // Download button click handler
                        document.querySelectorAll('.download-btn').forEach(btn => {
                            btn.addEventListener('click', function(e) {
                                e.preventDefault();

                                // Add loading state
                                const originalText = this.innerHTML;
                                this.innerHTML = '<i class="bi bi-download"></i> Mengunduh...';
                                this.style.pointerEvents = 'none';

                                // Simulate download process
                                setTimeout(() => {
                                    this.innerHTML = '<i class="bi bi-check-circle-fill"></i> Berhasil!';
                                    this.style.background = 'linear-gradient(135deg, #48bb78, #38a169)';

                                    setTimeout(() => {
                                        this.innerHTML = originalText;
                                        this.style.background =
                                            'linear-gradient(135deg, var(--primary-color), var(--secondary-color))';
                                        this.style.pointerEvents = 'auto';
                                    }, 2000);
                                }, 1500);
                            });
                        });
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
                    <script>
                        // Initialize AOS
                        AOS.init({
                            duration: 1000,
                            easing: 'ease-in-out',
                            once: true,
                            mirror: false
                        });

                        // Function to download PDF (you can modify this to point to actual PDF file)
                        function downloadPDF() {
                            // Replace with actual PDF URL
                            alert(
                                'Fitur download akan mengarahkan ke dokumen Perbup No. 32 Tahun 2022. Silakan hubungi admin untuk mendapatkan dokumen lengkap.'
                                );
                            // window.open('path/to/PERBUP_NO_32_TAHUN_2022.pdf', '_blank');
                        }

                        // Add smooth scrolling behavior
                        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                            anchor.addEventListener('click', function(e) {
                                e.preventDefault();
                                document.querySelector(this.getAttribute('href')).scrollIntoView({
                                    behavior: 'smooth'
                                });
                            });
                        });
                        AOS.init({
                            duration: 1000,
                            easing: 'ease-in-out',
                            once: true,
                            mirror: false
                        });
                        AOS.init({
                            duration: 800,
                            easing: 'ease-in-out',
                            once: true
                        });

                        // Slide Navigation
                        let currentSlideIndex = 0;
                        const totalSlides = 3;
                        const newsCards = document.querySelectorAll('.news-card');
                        const slideDots = document.querySelectorAll('.slide-dot');
                        const currentSlideSpan = document.getElementById('currentSlide');
                        const totalSlidesSpan = document.getElementById('totalSlides');
                        const prevBtn = document.getElementById('prevBtn');
                        const nextBtn = document.getElementById('nextBtn');

                        // Set total slides
                        totalSlidesSpan.textContent = totalSlides;

                        function updateSlide(index) {
                            // Update current slide index
                            currentSlideIndex = index;

                            // Update slide info
                            currentSlideSpan.textContent = index + 1;

                            // Update dots
                            slideDots.forEach((dot, i) => {
                                dot.classList.toggle('active', i === index);
                            });

                            // Add animation effect to cards
                            newsCards.forEach((card, i) => {
                                card.style.opacity = '0.5';
                                card.style.transform = 'scale(0.95)';
                            });

                            setTimeout(() => {
                                newsCards.forEach((card, i) => {
                                    card.style.opacity = '1';
                                    card.style.transform = 'scale(1)';
                                });
                            }, 200);
                        }

                        function nextSlide() {
                            const nextIndex = (currentSlideIndex + 1) % totalSlides;
                            updateSlide(nextIndex);
                        }

                        function prevSlide() {
                            const prevIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
                            updateSlide(prevIndex);
                        }

                        // Event listeners
                        nextBtn.addEventListener('click', nextSlide);
                        prevBtn.addEventListener('click', prevSlide);

                        slideDots.forEach((dot, index) => {
                            dot.addEventListener('click', () => updateSlide(index));
                        });

                        // Auto slide (optional)
                        setInterval(nextSlide, 5000);

                        // Add hover effects
                        newsCards.forEach(card => {
                            card.addEventListener('mouseenter', () => {
                                card.style.transform = 'translateY(-10px) scale(1.02)';
                            });

                            card.addEventListener('mouseleave', () => {
                                card.style.transform = 'translateY(0) scale(1)';
                            });
                        });

                        // Smooth transitions for all cards
                        newsCards.forEach(card => {
                            card.style.transition = 'all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1)';
                        });
                        AOS.init({
                            duration: 1000,
                            easing: 'ease-in-out',
                            once: true,
                            mirror: false
                        });

                        // Smooth scrolling for tab transitions
                        document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tab => {
                            tab.addEventListener('shown.bs.tab', function(e) {
                                e.target.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            });
                        });
                    </script>
    </main>
@endsection
