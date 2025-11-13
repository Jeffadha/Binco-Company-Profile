<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Binco Ran Indofarm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-gradient-custom {
            background: linear-gradient(135deg, #f0f9ff 0%, #e6f7f0 100%);
        }
        .text-primary {
            color: #0f766e;
        }
        .text-secondary {
            color: #64748b;
        }
        .text-accent {
            color: #059669;
        }
        .bg-card {
            background-color: rgba(255, 255, 255, 0.8);
        }
        .input-field {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            background-color: #f8fafc;
            transition: all 0.3s;
        }
        .input-field:focus {
            outline: none;
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }
        .btn-primary {
            background: linear-gradient(to right, #10b981, #0d9488);
            color: white;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #059669, #0f766e);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        textarea.input-field {
            resize: vertical;
            min-height: 80px;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gradient-custom">
        <div class="w-full max-w-md mx-auto p-6">
            <!-- Alert Messages -->
            <div id="success-alert" class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg hidden">
                Pendaftaran berhasil!
            </div>

            <div id="error-alert" class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg hidden">
                Terjadi kesalahan saat mendaftar.
            </div>

            <div class="mb-12 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-white rounded-2xl flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('/images/logo.png') }}" alt="Binco Ran Indofarm Logo" class="w-full h-full object-contain">
                </div>
                <h2 class="text-3xl font-bold text-primary">Binco Ran Indofarm</h2>
                <p class="text-secondary mt-2">Bergabunglah dengan kami</p>
            </div>

            <div class="bg-card p-8 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] backdrop-blur-sm border border-gray-100">
                <form class="space-y-6" id="register-form">
                    <div>
                        <input id="name" name="name" type="text" placeholder="Nama Lengkap"
                            class="input-field" required>
                        <p class="mt-1 text-sm text-red-500 hidden" id="name-error"></p>
                    </div>

                    <div>
                        <input id="email" name="email" type="email" placeholder="Alamat Email"
                            class="input-field" required>
                        <p class="mt-1 text-sm text-red-500 hidden" id="email-error"></p>
                    </div>

                    <div>
                        <input id="phone" name="phone" type="tel" placeholder="Nomor Telepon"
                            class="input-field" required>
                        <p class="mt-1 text-sm text-red-500 hidden" id="phone-error"></p>
                    </div>

                    <div>
                        <textarea id="address" name="address" placeholder="Alamat"
                            class="input-field" rows="3" required></textarea>
                        <p class="mt-1 text-sm text-red-500 hidden" id="address-error"></p>
                    </div>

                    <div class="relative">
                        <input id="password" name="password" type="password" placeholder="Kata Sandi"
                            class="input-field pr-10" required>
                        <button type="button" onclick="togglePassword('password')"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <i class="bi bi-eye-slash text-gray-400" id="password-icon"></i>
                        </button>
                        <p class="mt-1 text-sm text-red-500 hidden" id="password-error"></p>
                    </div>

                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="Konfirmasi Kata Sandi" class="input-field pr-10" required>
                        <button type="button" onclick="togglePassword('password_confirmation')"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <i class="bi bi-eye-slash text-gray-400" id="password_confirmation-icon"></i>
                        </button>
                    </div>

                    <button type="submit" class="w-full py-4 px-6 rounded-xl btn-primary font-medium">
                        Buat Akun
                    </button>
                </form>
            </div>

            <p class="mt-8 text-center text-secondary">
                Sudah punya akun?
                <a href="#" class="text-accent font-medium hover:text-emerald-700">Masuk</a>
            </p>
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(inputId + '-icon');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        }

        // Form submission handling
        document.getElementById('register-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;
            
            let isValid = true;
            
            // Reset error messages
            document.querySelectorAll('[id$="-error"]').forEach(el => {
                el.classList.add('hidden');
            });
            
            // Validate name
            if (name.length < 2) {
                document.getElementById('name-error').textContent = 'Nama harus minimal 2 karakter';
                document.getElementById('name-error').classList.remove('hidden');
                isValid = false;
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('email-error').textContent = 'Format email tidak valid';
                document.getElementById('email-error').classList.remove('hidden');
                isValid = false;
            }
            
            // Validate phone
            const phoneRegex = /^[0-9+\-\s()]{10,}$/;
            if (!phoneRegex.test(phone)) {
                document.getElementById('phone-error').textContent = 'Format nomor telepon tidak valid';
                document.getElementById('phone-error').classList.remove('hidden');
                isValid = false;
            }
            
            // Validate address
            if (address.length < 10) {
                document.getElementById('address-error').textContent = 'Alamat harus minimal 10 karakter';
                document.getElementById('address-error').classList.remove('hidden');
                isValid = false;
            }
            
            // Validate password
            if (password.length < 6) {
                document.getElementById('password-error').textContent = 'Kata sandi harus minimal 6 karakter';
                document.getElementById('password-error').classList.remove('hidden');
                isValid = false;
            }
            
            // Validate password confirmation
            if (password !== passwordConfirmation) {
                document.getElementById('password_confirmation').nextElementSibling.textContent = 'Konfirmasi kata sandi tidak cocok';
                document.getElementById('password_confirmation').nextElementSibling.classList.remove('hidden');
                isValid = false;
            }
            
            if (isValid) {
                // Simulate successful registration
                document.getElementById('success-alert').classList.remove('hidden');
                document.getElementById('register-form').reset();
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    document.getElementById('success-alert').classList.add('hidden');
                }, 5000);
            }
        });
    </script>
</body>
</html>