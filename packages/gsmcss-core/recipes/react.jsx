// gsmcss React Component Template
import React from 'react';
import 'gsmcss/dist/gsmcss.bundle.css';

export const GButton = ({ variant = 'primary', size = 'md', children, ...props }) => {
  return (
    <button
      className={`g-btn g-btn-${variant} g-btn-${size}`}
      {...props}
    >
      {children}
    </button>
  );
};
