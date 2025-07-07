<style>
        :root {
            --primary-color: #6c63ff;
            --secondary-color: #2d3748;
            --dark-color: #1a202c;
            --light-color: #f7fafc;
            --accent-color: #4fd1c5;
        }
        
        body {
            background-color: var(--dark-color);
            color: var(--light-color);
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }
        
        .navbar {
            background-color: rgba(26, 32, 44, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(26, 32, 44, 0.9) 0%, rgba(45, 55, 72, 0.9) 100%), 
                        url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 4.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.2;
        }
        
        .typing-text {
            font-size: 2.5rem;
            font-weight: 500;
            color: var(--light-color);
            position: relative;
            display: inline-block;
        }
        
        .typing-text::after {
            content: '';
            position: absolute;
            right: -10px;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 4rem;
            background: var(--primary-color);
            animation: blink 0.8s infinite;
        }
        
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        
        .hero-description {
            font-size: 1.25rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.75rem 2rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #5a52e0;
            border-color: #5a52e0;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(108, 99, 255, 0.3);
        }
        
        /* Skills Section */
        .skills-section {
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .skills-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            opacity: 0.15;
            z-index: 0;
        }
        
        .skills-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 32, 44, 0.9) 0%, rgba(45, 55, 72, 0.9) 100%);
            z-index: 1;
        }
        
        .skills-content {
            position: relative;
            z-index: 2;
        }
        
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .skill-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary-color);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .skill-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
        }
        
        .skill-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }
        
        .skill-title i {
            margin-right: 0.75rem;
            font-size: 1.75rem;
        }
        
        .skill-description {
            opacity: 0.8;
            margin-bottom: 1.5rem;
        }
        
        .skill-level {
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 0.5rem;
        }
        
        .skill-level-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 4px;
            transition: width 1s ease-in-out;
        }
        
        .skill-percentage {
            text-align: right;
            font-size: 0.875rem;
            opacity: 0.7;
        }
        
        /* Floating elements animation */
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        /* Contact Section */
        .contact-section {
            background-color: var(--secondary-color);
            position: relative;
            overflow: hidden;
        }
        
        .social-icons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }
        
        .social-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--light-color);
            font-size: 1.5rem;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
            background: var(--primary-color);
            color: white;
            box-shadow: 0 10px 20px rgba(108, 99, 255, 0.3);
            border-color: transparent;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 3.5rem;
            }
            
            .typing-text {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.75rem;
            }
            
            .typing-text {
                font-size: 1.75rem;
            }
            
            .skills-container {
                grid-template-columns: 1fr;
            }
            
            .social-icon {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.25rem;
            }
            
            .typing-text {
                font-size: 1.5rem;
            }
            
            .social-icons {
                gap: 0.75rem;
            }
            
            .social-icon {
                width: 45px;
                height: 45px;
                font-size: 1.1rem;
            }
        }
    </style>