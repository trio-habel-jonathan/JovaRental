tailwind.config = {
    theme: {
        extend: {
            colors: {
                darkprimary: '#3A2C75',
                primary: '#705fb1',
                secondary: '#a599d2',
                accent: '#8371c7',
            },
            animation: {
                'slide-up': 'slideUp 0.3s ease-out forwards',
                'slide-down': 'slideDown 0.3s ease-out forwards'
            },
            keyframes: {
                slideUp: {
                    '0%': { transform: 'translateY(0)' },
                    '100%': { transform: 'translateY(-100%)' }
                },
                slideDown: {
                    '0%': { transform: 'translateY(100%)' },
                    '100%': { transform: 'translateY(0)' }
                }
            }
        }
    }
}
