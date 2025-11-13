// resources/js/lang.js
class LanguageManager {
    constructor() {
        this.currentLang = localStorage.getItem('preferred_language') || 'id';
        this.translations = {};
        this.init();
    }

    async init() {
        await this.loadTranslations();
        this.applyLanguage(this.currentLang);
        this.setupLanguageSwitcher();
    }

    async loadTranslations() {
        try {
            const response = await fetch('/translations.json');
            this.translations = await response.json();
        } catch (error) {
            console.error('Error loading translations:', error);
        }
    }

    applyLanguage(lang) {
        this.currentLang = lang;
        localStorage.setItem('preferred_language', lang);
        document.documentElement.lang = lang;
        
        // Update semua elemen dengan atribut data-i18n
        document.querySelectorAll('[data-i18n]').forEach(element => {
            const key = element.getAttribute('data-i18n');
            const translation = this.getTranslation(key, lang);
            if (translation) {
                if (element.tagName === 'INPUT' && element.type !== 'submit') {
                    element.placeholder = translation;
                } else if (element.tagName === 'BUTTON' || (element.tagName === 'INPUT' && element.type === 'submit')) {
                    element.textContent = translation;
                } else {
                    element.innerHTML = translation;
                }
            }
        });

        // Update meta tags
        this.updateMetaTags(lang);
        
        // Trigger event untuk komponen yang perlu menyesuaikan diri
        window.dispatchEvent(new CustomEvent('languageChanged', { detail: { language: lang } }));
    }

    getTranslation(key, lang = null) {
        const targetLang = lang || this.currentLang;
        const keys = key.split('.');
        let value = this.translations[targetLang];
        
        for (const k of keys) {
            value = value ? value[k] : null;
        }
        
        return value || key;
    }

    setupLanguageSwitcher() {
        document.querySelectorAll('[data-lang-switch]').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const lang = button.getAttribute('data-lang-switch');
                this.applyLanguage(lang);
                
                // Update UI switcher
                this.updateSwitcherUI(lang);
            });
        });
    }

    updateSwitcherUI(lang) {
        document.querySelectorAll('[data-lang-switch]').forEach(button => {
            const buttonLang = button.getAttribute('data-lang-switch');
            if (buttonLang === lang) {
                button.classList.add('active', 'bg-emerald-600', 'text-white');
                button.classList.remove('bg-gray-200', 'text-gray-700');
            } else {
                button.classList.remove('active', 'bg-emerald-600', 'text-white');
                button.classList.add('bg-gray-200', 'text-gray-700');
            }
        });
    }

    updateMetaTags(lang) {
        // Update title jika diperlukan
        const titleKey = document.querySelector('title')?.getAttribute('data-i18n');
        if (titleKey) {
            const translatedTitle = this.getTranslation(titleKey, lang);
            if (translatedTitle) {
                document.title = translatedTitle;
            }
        }

        // Update meta description
        const metaDescription = document.querySelector('meta[name="description"]');
        if (metaDescription) {
            const descKey = metaDescription.getAttribute('data-i18n');
            if (descKey) {
                const translatedDesc = this.getTranslation(descKey, lang);
                if (translatedDesc) {
                    metaDescription.setAttribute('content', translatedDesc);
                }
            }
        }
    }
}

// Initialize language manager
window.languageManager = new LanguageManager();