O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:64:"C:\Users\jkemp\OneDrive\Pulpit\api\czysta\assets\styles\app.scss";s:10:"publicPath";s:55:"/assets/styles/app-cac2f9633dcb0441d1213d3a962a55ac.css";s:23:"publicPathWithoutDigest";s:22:"/assets/styles/app.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:246200:"@charset "UTF-8";
/*!
 * Bootstrap v4.6.2 (https://getbootstrap.com/)
 * Copyright 2011-2022 The Bootstrap Authors
 * Copyright 2011-2022 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
@import url("data:text/css;base64,");
:root {
  --blue: #2c3e50;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #e74c3c;
  --orange: #fd7e14;
  --yellow: #f39c12;
  --green: #18bc9c;
  --teal: #20c997;
  --cyan: #3498db;
  --white: #fff;
  --gray: #95a5a6;
  --gray-dark: #343a40;
  --primary: #2c3e50;
  --secondary: #95a5a6;
  --success: #18bc9c;
  --info: #3498db;
  --warning: #f39c12;
  --danger: #e74c3c;
  --light: #ecf0f1;
  --dark: #7b8a8b;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: Lato, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: Lato, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: #18bc9c;
  text-decoration: none;
  background-color: transparent;
}
a:hover {
  color: #0f7864;
  text-decoration: underline;
}

a:not([href]):not([class]) {
  color: inherit;
  text-decoration: none;
}
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #95a5a6;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type=radio],
input[type=checkbox] {
  box-sizing: border-box;
  padding: 0;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type=search]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: 3rem;
}

h2, .h2 {
  font-size: 2.5rem;
}

h3, .h3 {
  font-size: 2rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 0.875em;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 0.875em;
  color: #95a5a6;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #95a5a6;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container,
.container-fluid,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*=col-] {
  padding-right: 0;
  padding-left: 0;
}

.col-xl,
.col-xl-auto, .col-xl-12, .col-xl-11, .col-xl-10, .col-xl-9, .col-xl-8, .col-xl-7, .col-xl-6, .col-xl-5, .col-xl-4, .col-xl-3, .col-xl-2, .col-xl-1, .col-lg,
.col-lg-auto, .col-lg-12, .col-lg-11, .col-lg-10, .col-lg-9, .col-lg-8, .col-lg-7, .col-lg-6, .col-lg-5, .col-lg-4, .col-lg-3, .col-lg-2, .col-lg-1, .col-md,
.col-md-auto, .col-md-12, .col-md-11, .col-md-10, .col-md-9, .col-md-8, .col-md-7, .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2, .col-md-1, .col-sm,
.col-sm-auto, .col-sm-12, .col-sm-11, .col-sm-10, .col-sm-9, .col-sm-8, .col-sm-7, .col-sm-6, .col-sm-5, .col-sm-4, .col-sm-3, .col-sm-2, .col-sm-1, .col,
.col-auto, .col-12, .col-11, .col-10, .col-9, .col-8, .col-7, .col-6, .col-5, .col-4, .col-3, .col-2, .col-1 {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}

.row-cols-1 > * {
  flex: 0 0 100%;
  max-width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 50%;
  max-width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 25%;
  max-width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 20%;
  max-width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}

.col-1 {
  flex: 0 0 8.33333333%;
  max-width: 8.33333333%;
}

.col-2 {
  flex: 0 0 16.66666667%;
  max-width: 16.66666667%;
}

.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  flex: 0 0 33.33333333%;
  max-width: 33.33333333%;
}

.col-5 {
  flex: 0 0 41.66666667%;
  max-width: 41.66666667%;
}

.col-6 {
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  flex: 0 0 58.33333333%;
  max-width: 58.33333333%;
}

.col-8 {
  flex: 0 0 66.66666667%;
  max-width: 66.66666667%;
}

.col-9 {
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  flex: 0 0 83.33333333%;
  max-width: 83.33333333%;
}

.col-11 {
  flex: 0 0 91.66666667%;
  max-width: 91.66666667%;
}

.col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  order: -1;
}

.order-last {
  order: 13;
}

.order-0 {
  order: 0;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-6 {
  order: 6;
}

.order-7 {
  order: 7;
}

.order-8 {
  order: 8;
}

.order-9 {
  order: 9;
}

.order-10 {
  order: 10;
}

.order-11 {
  order: 11;
}

.order-12 {
  order: 12;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    order: -1;
  }
  .order-sm-last {
    order: 13;
  }
  .order-sm-0 {
    order: 0;
  }
  .order-sm-1 {
    order: 1;
  }
  .order-sm-2 {
    order: 2;
  }
  .order-sm-3 {
    order: 3;
  }
  .order-sm-4 {
    order: 4;
  }
  .order-sm-5 {
    order: 5;
  }
  .order-sm-6 {
    order: 6;
  }
  .order-sm-7 {
    order: 7;
  }
  .order-sm-8 {
    order: 8;
  }
  .order-sm-9 {
    order: 9;
  }
  .order-sm-10 {
    order: 10;
  }
  .order-sm-11 {
    order: 11;
  }
  .order-sm-12 {
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-md-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-md-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    order: -1;
  }
  .order-md-last {
    order: 13;
  }
  .order-md-0 {
    order: 0;
  }
  .order-md-1 {
    order: 1;
  }
  .order-md-2 {
    order: 2;
  }
  .order-md-3 {
    order: 3;
  }
  .order-md-4 {
    order: 4;
  }
  .order-md-5 {
    order: 5;
  }
  .order-md-6 {
    order: 6;
  }
  .order-md-7 {
    order: 7;
  }
  .order-md-8 {
    order: 8;
  }
  .order-md-9 {
    order: 9;
  }
  .order-md-10 {
    order: 10;
  }
  .order-md-11 {
    order: 11;
  }
  .order-md-12 {
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-lg-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    order: -1;
  }
  .order-lg-last {
    order: 13;
  }
  .order-lg-0 {
    order: 0;
  }
  .order-lg-1 {
    order: 1;
  }
  .order-lg-2 {
    order: 2;
  }
  .order-lg-3 {
    order: 3;
  }
  .order-lg-4 {
    order: 4;
  }
  .order-lg-5 {
    order: 5;
  }
  .order-lg-6 {
    order: 6;
  }
  .order-lg-7 {
    order: 7;
  }
  .order-lg-8 {
    order: 8;
  }
  .order-lg-9 {
    order: 9;
  }
  .order-lg-10 {
    order: 10;
  }
  .order-lg-11 {
    order: 11;
  }
  .order-lg-12 {
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xl-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    order: -1;
  }
  .order-xl-last {
    order: 13;
  }
  .order-xl-0 {
    order: 0;
  }
  .order-xl-1 {
    order: 1;
  }
  .order-xl-2 {
    order: 2;
  }
  .order-xl-3 {
    order: 3;
  }
  .order-xl-4 {
    order: 4;
  }
  .order-xl-5 {
    order: 5;
  }
  .order-xl-6 {
    order: 6;
  }
  .order-xl-7 {
    order: 7;
  }
  .order-xl-8 {
    order: 8;
  }
  .order-xl-9 {
    order: 9;
  }
  .order-xl-10 {
    order: 10;
  }
  .order-xl-11 {
    order: 11;
  }
  .order-xl-12 {
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}
.table th,
.table td {
  padding: 0.5rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}
.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}
.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #c4c9ce;
}
.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #919ba4;
}

.table-hover .table-primary:hover {
  background-color: #b6bcc2;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #b6bcc2;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #e1e6e6;
}
.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #c8d0d1;
}

.table-hover .table-secondary:hover {
  background-color: #d3dada;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #d3dada;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #beece3;
}
.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #87dccc;
}

.table-hover .table-success:hover {
  background-color: #aae6db;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #aae6db;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #c6e2f5;
}
.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #95c9ec;
}

.table-hover .table-info:hover {
  background-color: #b0d7f1;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #b0d7f1;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fce3bd;
}
.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #f9cc84;
}

.table-hover .table-warning:hover {
  background-color: #fbd9a5;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #fbd9a5;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f8cdc8;
}
.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #f3a29a;
}

.table-hover .table-danger:hover {
  background-color: #f5b8b1;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f5b8b1;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fafbfb;
}
.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #f5f7f8;
}

.table-hover .table-light:hover {
  background-color: #ecf0f0;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ecf0f0;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #dadedf;
}
.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #bac2c3;
}

.table-hover .table-dark:hover {
  background-color: #ccd2d3;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #ccd2d3;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}
.table .thead-light th {
  color: #7b8a8b;
  background-color: #ecf0f1;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}
.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}
.table-dark.table-bordered {
  border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}
.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #7b8a8b;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control:focus {
  color: #7b8a8b;
  background-color: #fff;
  border-color: #597ea2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.form-control::placeholder {
  color: #95a5a6;
  opacity: 1;
}
.form-control:disabled, .form-control[readonly] {
  background-color: #ecf0f1;
  opacity: 1;
}

input[type=date].form-control,
input[type=time].form-control,
input[type=datetime-local].form-control,
input[type=month].form-control {
  appearance: none;
}

select.form-control:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #7b8a8b;
}
select.form-control:focus::-ms-value {
  color: #7b8a8b;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}
.form-row > .col,
.form-row > [class*=col-] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  color: #95a5a6;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #18bc9c;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(24, 188, 156, 0.9);
  border-radius: 0.25rem;
}
.form-row > .col > .valid-tooltip, .form-row > [class*=col-] > .valid-tooltip {
  left: 5px;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #18bc9c;
  padding-right: calc(1.5em + 0.75rem) !important;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2318bc9c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #18bc9c;
  box-shadow: 0 0 0 0.2rem rgba(24, 188, 156, 0.25);
}

.was-validated select.form-control:valid, select.form-control.is-valid {
  padding-right: 3rem !important;
  background-position: right 1.5rem center;
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #18bc9c;
  padding-right: calc(0.75em + 2.3125rem) !important;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2318bc9c' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) no-repeat;
}
.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #18bc9c;
  box-shadow: 0 0 0 0.2rem rgba(24, 188, 156, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #18bc9c;
}
.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #18bc9c;
}
.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #18bc9c;
}
.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #24e3be;
  background-color: #24e3be;
}
.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(24, 188, 156, 0.25);
}
.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #18bc9c;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #18bc9c;
}
.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #18bc9c;
  box-shadow: 0 0 0 0.2rem rgba(24, 188, 156, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #e74c3c;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(231, 76, 60, 0.9);
  border-radius: 0.25rem;
}
.form-row > .col > .invalid-tooltip, .form-row > [class*=col-] > .invalid-tooltip {
  left: 5px;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #e74c3c;
  padding-right: calc(1.5em + 0.75rem) !important;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e74c3c' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e74c3c' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #e74c3c;
  box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
}

.was-validated select.form-control:invalid, select.form-control.is-invalid {
  padding-right: 3rem !important;
  background-position: right 1.5rem center;
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #e74c3c;
  padding-right: calc(0.75em + 2.3125rem) !important;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e74c3c' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e74c3c' stroke='none'/%3e%3c/svg%3e") center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) no-repeat;
}
.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #e74c3c;
  box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #e74c3c;
}
.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #e74c3c;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #e74c3c;
}
.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #ed7669;
  background-color: #ed7669;
}
.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
}
.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #e74c3c;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #e74c3c;
}
.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #e74c3c;
  box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}
.form-inline .form-check {
  width: 100%;
}
@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 15px 10px;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: #212529;
  text-decoration: none;
}
.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.btn.disabled, .btn:disabled {
  opacity: 0.65;
}
.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}
a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.btn-primary:hover {
  color: #fff;
  background-color: #1e2b37;
  border-color: #1a252f;
}
.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #1e2b37;
  border-color: #1a252f;
  box-shadow: 0 0 0 0.2rem rgba(76, 91, 106, 0.5);
}
.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #1a252f;
  border-color: #151e27;
}
.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(76, 91, 106, 0.5);
}

.btn-secondary {
  color: #212529;
  background-color: #95a5a6;
  border-color: #95a5a6;
}
.btn-secondary:hover {
  color: #fff;
  background-color: #809395;
  border-color: #798d8f;
}
.btn-secondary:focus, .btn-secondary.focus {
  color: #fff;
  background-color: #809395;
  border-color: #798d8f;
  box-shadow: 0 0 0 0.2rem rgba(132, 146, 147, 0.5);
}
.btn-secondary.disabled, .btn-secondary:disabled {
  color: #212529;
  background-color: #95a5a6;
  border-color: #95a5a6;
}
.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #798d8f;
  border-color: #738789;
}
.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(132, 146, 147, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #18bc9c;
  border-color: #18bc9c;
}
.btn-success:hover {
  color: #fff;
  background-color: #149a80;
  border-color: #128f76;
}
.btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #149a80;
  border-color: #128f76;
  box-shadow: 0 0 0 0.2rem rgba(59, 198, 171, 0.5);
}
.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #18bc9c;
  border-color: #18bc9c;
}
.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active, .show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #128f76;
  border-color: #11836d;
}
.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus, .show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(59, 198, 171, 0.5);
}

.btn-info {
  color: #fff;
  background-color: #3498db;
  border-color: #3498db;
}
.btn-info:hover {
  color: #fff;
  background-color: #2384c6;
  border-color: #217dbb;
}
.btn-info:focus, .btn-info.focus {
  color: #fff;
  background-color: #2384c6;
  border-color: #217dbb;
  box-shadow: 0 0 0 0.2rem rgba(82, 167, 224, 0.5);
}
.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #3498db;
  border-color: #3498db;
}
.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #217dbb;
  border-color: #1f76b0;
}
.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus, .show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(82, 167, 224, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #f39c12;
  border-color: #f39c12;
}
.btn-warning:hover {
  color: #fff;
  background-color: #d4860b;
  border-color: #c87f0a;
}
.btn-warning:focus, .btn-warning.focus {
  color: #fff;
  background-color: #d4860b;
  border-color: #c87f0a;
  box-shadow: 0 0 0 0.2rem rgba(212, 138, 21, 0.5);
}
.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #f39c12;
  border-color: #f39c12;
}
.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active, .show > .btn-warning.dropdown-toggle {
  color: #fff;
  background-color: #c87f0a;
  border-color: #bc770a;
}
.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(212, 138, 21, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #e74c3c;
  border-color: #e74c3c;
}
.btn-danger:hover {
  color: #fff;
  background-color: #e12e1c;
  border-color: #d62c1a;
}
.btn-danger:focus, .btn-danger.focus {
  color: #fff;
  background-color: #e12e1c;
  border-color: #d62c1a;
  box-shadow: 0 0 0 0.2rem rgba(235, 103, 89, 0.5);
}
.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #e74c3c;
  border-color: #e74c3c;
}
.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active, .show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #d62c1a;
  border-color: #ca2a19;
}
.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(235, 103, 89, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #ecf0f1;
  border-color: #ecf0f1;
}
.btn-light:hover {
  color: #212529;
  background-color: #d6dfe1;
  border-color: #cfd9db;
}
.btn-light:focus, .btn-light.focus {
  color: #212529;
  background-color: #d6dfe1;
  border-color: #cfd9db;
  box-shadow: 0 0 0 0.2rem rgba(206, 210, 211, 0.5);
}
.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #ecf0f1;
  border-color: #ecf0f1;
}
.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active, .show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #cfd9db;
  border-color: #c7d3d6;
}
.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus, .show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(206, 210, 211, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #7b8a8b;
  border-color: #7b8a8b;
}
.btn-dark:hover {
  color: #fff;
  background-color: #697677;
  border-color: #636f70;
}
.btn-dark:focus, .btn-dark.focus {
  color: #fff;
  background-color: #697677;
  border-color: #636f70;
  box-shadow: 0 0 0 0.2rem rgba(143, 156, 156, 0.5);
}
.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #7b8a8b;
  border-color: #7b8a8b;
}
.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active, .show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #636f70;
  border-color: #5d696a;
}
.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(143, 156, 156, 0.5);
}

.btn-outline-primary {
  color: #2c3e50;
  border-color: #2c3e50;
}
.btn-outline-primary:hover {
  color: #fff;
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.5);
}
.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #2c3e50;
  background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.5);
}

.btn-outline-secondary {
  color: #95a5a6;
  border-color: #95a5a6;
}
.btn-outline-secondary:hover {
  color: #212529;
  background-color: #95a5a6;
  border-color: #95a5a6;
}
.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(149, 165, 166, 0.5);
}
.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #95a5a6;
  background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show > .btn-outline-secondary.dropdown-toggle {
  color: #212529;
  background-color: #95a5a6;
  border-color: #95a5a6;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(149, 165, 166, 0.5);
}

.btn-outline-success {
  color: #18bc9c;
  border-color: #18bc9c;
}
.btn-outline-success:hover {
  color: #fff;
  background-color: #18bc9c;
  border-color: #18bc9c;
}
.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(24, 188, 156, 0.5);
}
.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #18bc9c;
  background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #18bc9c;
  border-color: #18bc9c;
}
.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(24, 188, 156, 0.5);
}

.btn-outline-info {
  color: #3498db;
  border-color: #3498db;
}
.btn-outline-info:hover {
  color: #fff;
  background-color: #3498db;
  border-color: #3498db;
}
.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.5);
}
.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #3498db;
  background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active, .show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #3498db;
  border-color: #3498db;
}
.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.5);
}

.btn-outline-warning {
  color: #f39c12;
  border-color: #f39c12;
}
.btn-outline-warning:hover {
  color: #212529;
  background-color: #f39c12;
  border-color: #f39c12;
}
.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(243, 156, 18, 0.5);
}
.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #f39c12;
  background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active, .show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #f39c12;
  border-color: #f39c12;
}
.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(243, 156, 18, 0.5);
}

.btn-outline-danger {
  color: #e74c3c;
  border-color: #e74c3c;
}
.btn-outline-danger:hover {
  color: #fff;
  background-color: #e74c3c;
  border-color: #e74c3c;
}
.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.5);
}
.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #e74c3c;
  background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active, .show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #e74c3c;
  border-color: #e74c3c;
}
.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.5);
}

.btn-outline-light {
  color: #ecf0f1;
  border-color: #ecf0f1;
}
.btn-outline-light:hover {
  color: #212529;
  background-color: #ecf0f1;
  border-color: #ecf0f1;
}
.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(236, 240, 241, 0.5);
}
.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #ecf0f1;
  background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active, .show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #ecf0f1;
  border-color: #ecf0f1;
}
.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(236, 240, 241, 0.5);
}

.btn-outline-dark {
  color: #7b8a8b;
  border-color: #7b8a8b;
}
.btn-outline-dark:hover {
  color: #fff;
  background-color: #7b8a8b;
  border-color: #7b8a8b;
}
.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(123, 138, 139, 0.5);
}
.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #7b8a8b;
  background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active, .show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #7b8a8b;
  border-color: #7b8a8b;
}
.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(123, 138, 139, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #18bc9c;
  text-decoration: none;
}
.btn-link:hover {
  color: #0f7864;
  text-decoration: underline;
}
.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
}
.btn-link:disabled, .btn-link.disabled {
  color: #95a5a6;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 21px 14px;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 9px 6px;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type=submit].btn-block,
input[type=reset].btn-block,
input[type=button].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.width {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.width {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}
.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}
.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropleft .dropdown-toggle::after {
  display: none;
}
.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^=top], .dropdown-menu[x-placement^=right], .dropdown-menu[x-placement^=bottom], .dropdown-menu[x-placement^=left] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #ecf0f1;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #7b8a8b;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: #fff;
  text-decoration: none;
  background-color: #2c3e50;
}
.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #2c3e50;
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: #b4bcc2;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #95a5a6;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #7b8a8b;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}
.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 7.5px;
  padding-left: 7.5px;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropright .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 4.5px;
  padding-left: 4.5px;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 10.5px;
  padding-left: 10.5px;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}
.btn-group-toggle > .btn input[type=radio],
.btn-group-toggle > .btn input[type=checkbox],
.btn-group-toggle > .btn-group > .btn input[type=radio],
.btn-group-toggle > .btn-group > .btn input[type=checkbox] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
  margin-bottom: 0;
}
.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}
.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}
.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .custom-file {
  display: flex;
  align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label, .input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group:not(.has-validation) > .form-control:not(:last-child),
.input-group:not(.has-validation) > .custom-select:not(:last-child),
.input-group:not(.has-validation) > .custom-file:not(:last-child) .custom-file-label,
.input-group:not(.has-validation) > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > .form-control:nth-last-child(n+3),
.input-group.has-validation > .custom-select:nth-last-child(n+3),
.input-group.has-validation > .custom-file:nth-last-child(n+3) .custom-file-label,
.input-group.has-validation > .custom-file:nth-last-child(n+3) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: flex;
}
.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}
.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
  z-index: 3;
}
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #7b8a8b;
  text-align: center;
  white-space: nowrap;
  background-color: #ecf0f1;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}
.input-group-text input[type=radio],
.input-group-text input[type=checkbox] {
  margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group:not(.has-validation) > .input-group-append:not(:last-child) > .btn,
.input-group:not(.has-validation) > .input-group-append:not(:last-child) > .input-group-text,
.input-group.has-validation > .input-group-append:nth-last-child(n+3) > .btn,
.input-group.has-validation > .input-group-append:nth-last-child(n+3) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  z-index: 1;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
  print-color-adjust: exact;
}

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.25rem;
  opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #2c3e50;
  background-color: #2c3e50;
}
.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #597ea2;
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #7997b5;
  border-color: #7997b5;
}
.custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
  color: #95a5a6;
}
.custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #ecf0f1;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}
.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: 1px solid #b4bcc2;
}
.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: 50%/50% 50% no-repeat;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #2c3e50;
  background-color: #2c3e50;
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(44, 62, 80, 0.5);
}
.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(44, 62, 80, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(44, 62, 80, 0.5);
}

.custom-switch {
  padding-left: 2.25rem;
}
.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}
.custom-switch .custom-control-label::after {
  top: calc(0.25rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #b4bcc2;
  border-radius: 0.5rem;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}
.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  transform: translateX(0.75rem);
}
.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(44, 62, 80, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #7b8a8b;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 0.75rem center/8px 10px no-repeat;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  appearance: none;
}
.custom-select:focus {
  border-color: #597ea2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.custom-select:focus::-ms-value {
  color: #7b8a8b;
  background-color: #fff;
}
.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}
.custom-select:disabled {
  color: #95a5a6;
  background-color: #ecf0f1;
}
.custom-select::-ms-expand {
  display: none;
}
.custom-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #7b8a8b;
}

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
}

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  overflow: hidden;
  opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
  border-color: #597ea2;
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.custom-file-input[disabled] ~ .custom-file-label, .custom-file-input:disabled ~ .custom-file-label {
  background-color: #ecf0f1;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  overflow: hidden;
  font-weight: 400;
  line-height: 1.5;
  color: #7b8a8b;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}
.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #7b8a8b;
  content: "Browse";
  background-color: #ecf0f1;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  appearance: none;
}
.custom-range:focus {
  outline: 0;
}
.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}
.custom-range::-moz-focus-outer {
  border: 0;
}
.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #2c3e50;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    transition: none;
  }
}
.custom-range::-webkit-slider-thumb:active {
  background-color: #7997b5;
}
.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #2c3e50;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    transition: none;
  }
}
.custom-range::-moz-range-thumb:active {
  background-color: #7997b5;
}
.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #2c3e50;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    transition: none;
  }
}
.custom-range::-ms-thumb:active {
  background-color: #7997b5;
}
.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}
.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}
.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}
.custom-range:disabled::-webkit-slider-thumb {
  background-color: #b4bcc2;
}
.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}
.custom-range:disabled::-moz-range-thumb {
  background-color: #b4bcc2;
}
.custom-range:disabled::-moz-range-track {
  cursor: default;
}
.custom-range:disabled::-ms-thumb {
  background-color: #b4bcc2;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .custom-control-label::before,
  .custom-file-label,
  .custom-select {
    transition: none;
  }
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 2rem;
}
.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}
.nav-link.disabled {
  color: #95a5a6;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #ced4da;
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  background-color: transparent;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: #ced4da #ced4da transparent;
}
.nav-tabs .nav-link.disabled {
  color: #95a5a6;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #18bc9c;
  background-color: #fff;
  border-color: #ced4da #ced4da transparent;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.25rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #2c3e50;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
}
.navbar .container,
.navbar .container-fluid,
.navbar .container-sm,
.navbar .container-md,
.navbar .container-lg,
.navbar .container-xl {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}
.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}
.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: 50%/100% 100% no-repeat;
}

.navbar-nav-scroll {
  max-height: 75vh;
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid,
  .navbar-expand-sm > .container-sm,
  .navbar-expand-sm > .container-md,
  .navbar-expand-sm > .container-lg,
  .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid,
  .navbar-expand-sm > .container-sm,
  .navbar-expand-sm > .container-md,
  .navbar-expand-sm > .container-lg,
  .navbar-expand-sm > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid,
  .navbar-expand-md > .container-sm,
  .navbar-expand-md > .container-md,
  .navbar-expand-md > .container-lg,
  .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid,
  .navbar-expand-md > .container-sm,
  .navbar-expand-md > .container-md,
  .navbar-expand-md > .container-lg,
  .navbar-expand-md > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid,
  .navbar-expand-lg > .container-sm,
  .navbar-expand-lg > .container-md,
  .navbar-expand-lg > .container-lg,
  .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid,
  .navbar-expand-lg > .container-sm,
  .navbar-expand-lg > .container-md,
  .navbar-expand-lg > .container-lg,
  .navbar-expand-lg > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid,
  .navbar-expand-xl > .container-sm,
  .navbar-expand-xl > .container-md,
  .navbar-expand-xl > .container-lg,
  .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid,
  .navbar-expand-xl > .container-sm,
  .navbar-expand-xl > .container-md,
  .navbar-expand-xl > .container-lg,
  .navbar-expand-xl > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}
.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-sm,
.navbar-expand > .container-md,
.navbar-expand > .container-lg,
.navbar-expand > .container-xl {
  padding-right: 0;
  padding-left: 0;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-sm,
.navbar-expand > .container-md,
.navbar-expand > .container-lg,
.navbar-expand > .container-xl {
  flex-wrap: nowrap;
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}
.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #18bc9c;
}
.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: #18bc9c;
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #18bc9c;
}
.navbar-dark .navbar-toggler {
  color: #fff;
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='%23fff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
  color: #fff;
}
.navbar-dark .navbar-text a {
  color: #18bc9c;
}
.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #18bc9c;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}
.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
  border-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
  flex-shrink: 0;
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck .card {
  margin-bottom: 15px;
}
@media (min-width: 576px) {
  .card-deck {
    display: flex;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    flex: 1 0 0%;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group > .card {
  margin-bottom: 15px;
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion {
  overflow-anchor: none;
}
.accordion > .card {
  overflow: hidden;
}
.accordion > .card:not(:last-of-type) {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.accordion > .card:not(:first-of-type) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.accordion > .card > .card-header {
  border-radius: 0;
  margin-bottom: -1px;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.375rem 0.75rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #ecf0f1;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #95a5a6;
  content: "/";
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}
.breadcrumb-item.active {
  color: #95a5a6;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: 0;
  line-height: 1.25;
  color: #fff;
  background-color: #18bc9c;
  border: 0 solid transparent;
}
.page-link:hover {
  z-index: 2;
  color: #fff;
  text-decoration: none;
  background-color: #0f7864;
  border-color: transparent;
}
.page-link:focus {
  z-index: 3;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25);
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #0f7864;
  border-color: transparent;
}
.page-item.disabled .page-link {
  color: #ecf0f1;
  pointer-events: none;
  cursor: auto;
  background-color: #3be6c4;
  border-color: transparent;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .badge {
    transition: none;
  }
}
a.badge:hover, a.badge:focus {
  text-decoration: none;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #2c3e50;
}
a.badge-primary:hover, a.badge-primary:focus {
  color: #fff;
  background-color: #1a252f;
}
a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.5);
}

.badge-secondary {
  color: #212529;
  background-color: #95a5a6;
}
a.badge-secondary:hover, a.badge-secondary:focus {
  color: #212529;
  background-color: #798d8f;
}
a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(149, 165, 166, 0.5);
}

.badge-success {
  color: #fff;
  background-color: #18bc9c;
}
a.badge-success:hover, a.badge-success:focus {
  color: #fff;
  background-color: #128f76;
}
a.badge-success:focus, a.badge-success.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(24, 188, 156, 0.5);
}

.badge-info {
  color: #fff;
  background-color: #3498db;
}
a.badge-info:hover, a.badge-info:focus {
  color: #fff;
  background-color: #217dbb;
}
a.badge-info:focus, a.badge-info.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.5);
}

.badge-warning {
  color: #212529;
  background-color: #f39c12;
}
a.badge-warning:hover, a.badge-warning:focus {
  color: #212529;
  background-color: #c87f0a;
}
a.badge-warning:focus, a.badge-warning.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(243, 156, 18, 0.5);
}

.badge-danger {
  color: #fff;
  background-color: #e74c3c;
}
a.badge-danger:hover, a.badge-danger:focus {
  color: #fff;
  background-color: #d62c1a;
}
a.badge-danger:focus, a.badge-danger.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.5);
}

.badge-light {
  color: #212529;
  background-color: #ecf0f1;
}
a.badge-light:hover, a.badge-light:focus {
  color: #212529;
  background-color: #cfd9db;
}
a.badge-light:focus, a.badge-light.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(236, 240, 241, 0.5);
}

.badge-dark {
  color: #fff;
  background-color: #7b8a8b;
}
a.badge-dark:hover, a.badge-dark:focus {
  color: #fff;
  background-color: #636f70;
}
a.badge-dark:focus, a.badge-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(123, 138, 139, 0.5);
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #ecf0f1;
  border-radius: 0.3rem;
}
@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}
.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #17202a;
  background-color: #d5d8dc;
  border-color: #c4c9ce;
}
.alert-primary hr {
  border-top-color: #b6bcc2;
}
.alert-primary .alert-link {
  color: #050709;
}

.alert-secondary {
  color: #4d5656;
  background-color: #eaeded;
  border-color: #e1e6e6;
}
.alert-secondary hr {
  border-top-color: #d3dada;
}
.alert-secondary .alert-link {
  color: #353b3b;
}

.alert-success {
  color: #0c6251;
  background-color: #d1f2eb;
  border-color: #beece3;
}
.alert-success hr {
  border-top-color: #aae6db;
}
.alert-success .alert-link {
  color: #06352b;
}

.alert-info {
  color: #1b4f72;
  background-color: #d6eaf8;
  border-color: #c6e2f5;
}
.alert-info hr {
  border-top-color: #b0d7f1;
}
.alert-info .alert-link {
  color: #113249;
}

.alert-warning {
  color: #7e5109;
  background-color: #fdebd0;
  border-color: #fce3bd;
}
.alert-warning hr {
  border-top-color: #fbd9a5;
}
.alert-warning .alert-link {
  color: #4e3206;
}

.alert-danger {
  color: #78281f;
  background-color: #fadbd8;
  border-color: #f8cdc8;
}
.alert-danger hr {
  border-top-color: #f5b8b1;
}
.alert-danger .alert-link {
  color: #4f1a15;
}

.alert-light {
  color: #7b7d7d;
  background-color: #fbfcfc;
  border-color: #fafbfb;
}
.alert-light hr {
  border-top-color: #ecf0f0;
}
.alert-light .alert-link {
  color: #626363;
}

.alert-dark {
  color: #404848;
  background-color: #e5e8e8;
  border-color: #dadedf;
}
.alert-dark hr {
  border-top-color: #ccd2d3;
}
.alert-dark .alert-link {
  color: #282d2d;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  line-height: 0;
  font-size: 0.75rem;
  background-color: #ecf0f1;
  border-radius: 0.25rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #2c3e50;
  transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.media {
  display: flex;
  align-items: flex-start;
}

.media-body {
  flex: 1;
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}

.list-group-item-action {
  width: 100%;
  color: #7b8a8b;
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #7b8a8b;
  text-decoration: none;
  background-color: #ecf0f1;
}
.list-group-item-action:active {
  color: #212529;
  background-color: #ecf0f1;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: #95a5a6;
  pointer-events: none;
  background-color: #ecf0f1;
}
.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #2c3e50;
  border-color: #2c3e50;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #17202a;
  background-color: #c4c9ce;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #17202a;
  background-color: #b6bcc2;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #17202a;
  border-color: #17202a;
}

.list-group-item-secondary {
  color: #4d5656;
  background-color: #e1e6e6;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #4d5656;
  background-color: #d3dada;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #4d5656;
  border-color: #4d5656;
}

.list-group-item-success {
  color: #0c6251;
  background-color: #beece3;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #0c6251;
  background-color: #aae6db;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #0c6251;
  border-color: #0c6251;
}

.list-group-item-info {
  color: #1b4f72;
  background-color: #c6e2f5;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #1b4f72;
  background-color: #b0d7f1;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #1b4f72;
  border-color: #1b4f72;
}

.list-group-item-warning {
  color: #7e5109;
  background-color: #fce3bd;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #7e5109;
  background-color: #fbd9a5;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #7e5109;
  border-color: #7e5109;
}

.list-group-item-danger {
  color: #78281f;
  background-color: #f8cdc8;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #78281f;
  background-color: #f5b8b1;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #78281f;
  border-color: #78281f;
}

.list-group-item-light {
  color: #7b7d7d;
  background-color: #fafbfb;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #7b7d7d;
  background-color: #ecf0f0;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #7b7d7d;
  border-color: #7b7d7d;
}

.list-group-item-dark {
  color: #404848;
  background-color: #dadedf;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #404848;
  background-color: #ccd2d3;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #404848;
  border-color: #404848;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.5;
}
.close:hover {
  color: #000;
  text-decoration: none;
}
.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: 0.75;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
}

a.close.disabled {
  pointer-events: none;
}

.toast {
  flex-basis: 350px;
  max-width: 350px;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  opacity: 0;
  border-radius: 0.25rem;
}
.toast:not(:last-child) {
  margin-bottom: 0.75rem;
}
.toast.showing {
  opacity: 1;
}
.toast.show {
  display: block;
  opacity: 1;
}
.toast.hide {
  display: none;
}

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #95a5a6;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.toast-body {
  padding: 0.75rem;
}

.modal-open {
  overflow: hidden;
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  display: flex;
  max-height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden;
}
.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  flex-shrink: 0;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem);
}
.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  height: min-content;
  content: "";
}
.modal-dialog-centered.modal-dialog-scrollable {
  flex-direction: column;
  justify-content: center;
  height: 100%;
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}
.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.modal-header .close {
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}
.modal-footer > * {
  margin: 0.25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem);
  }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered::before {
    height: calc(100vh - 3.5rem);
    height: min-content;
  }
  .modal-sm {
    max-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: Lato, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: 0.9;
}
.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^=top] {
  padding: 0.4rem 0;
}
.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^=top] .arrow {
  bottom: 0;
}
.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^=top] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^=right] {
  padding: 0 0.4rem;
}
.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^=right] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^=right] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^=bottom] {
  padding: 0.4rem 0;
}
.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^=bottom] .arrow {
  top: 0;
}
.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^=left] {
  padding: 0 0.4rem;
}
.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^=left] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^=left] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: Lato, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}
.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}
.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^=top] {
  margin-bottom: 0.5rem;
}
.bs-popover-top > .arrow, .bs-popover-auto[x-placement^=top] > .arrow {
  bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^=top] > .arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^=top] > .arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^=right] {
  margin-left: 0.5rem;
}
.bs-popover-right > .arrow, .bs-popover-auto[x-placement^=right] > .arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^=right] > .arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^=right] > .arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^=bottom] {
  margin-top: 0.5rem;
}
.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^=bottom] > .arrow {
  top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^=bottom] > .arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^=bottom] > .arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^=left] {
  margin-right: 0.5rem;
}
.bs-popover-left > .arrow, .bs-popover-auto[x-placement^=left] > .arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^=left] > .arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^=left] > .arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: 50%/100% 100% no-repeat;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators li {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg);
  }
}
.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentcolor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentcolor;
  border-radius: 50%;
  opacity: 0;
  animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    animation-duration: 1.5s;
  }
}
.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #2c3e50 !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #1a252f !important;
}

.bg-secondary {
  background-color: #95a5a6 !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #798d8f !important;
}

.bg-success {
  background-color: #18bc9c !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #128f76 !important;
}

.bg-info {
  background-color: #3498db !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #217dbb !important;
}

.bg-warning {
  background-color: #f39c12 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #c87f0a !important;
}

.bg-danger {
  background-color: #e74c3c !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #d62c1a !important;
}

.bg-light {
  background-color: #ecf0f1 !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #cfd9db !important;
}

.bg-dark {
  background-color: #7b8a8b !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #636f70 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #2c3e50 !important;
}

.border-secondary {
  border-color: #95a5a6 !important;
}

.border-success {
  border-color: #18bc9c !important;
}

.border-info {
  border-color: #3498db !important;
}

.border-warning {
  border-color: #f39c12 !important;
}

.border-danger {
  border-color: #e74c3c !important;
}

.border-light {
  border-color: #ecf0f1 !important;
}

.border-dark {
  border-color: #7b8a8b !important;
}

.border-white {
  border-color: #fff !important;
}

.rounded-sm {
  border-radius: 0.2rem !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
}
@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
}
.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}
.embed-responsive::before {
  display: block;
  content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.85714286%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
}
.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}
@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}
@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}
.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.vw-100 {
  width: 100vw !important;
}

.vh-100 {
  height: 100vh !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.mt-n3,
.my-n3 {
  margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mt-n5,
.my-n5 {
  margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important;
  }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important;
  }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important;
  }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important;
  }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important;
  }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important;
  }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important;
  }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important;
  }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important;
  }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important;
  }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important;
  }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important;
  }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important;
  }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important;
  }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important;
  }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important;
  }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}
.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-bolder {
  font-weight: bolder !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #2c3e50 !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #11181f !important;
}

.text-secondary {
  color: #95a5a6 !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #6d8082 !important;
}

.text-success {
  color: #18bc9c !important;
}

a.text-success:hover, a.text-success:focus {
  color: #0f7864 !important;
}

.text-info {
  color: #3498db !important;
}

a.text-info:hover, a.text-info:focus {
  color: #1d6fa5 !important;
}

.text-warning {
  color: #f39c12 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #b06f09 !important;
}

.text-danger {
  color: #e74c3c !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #bf2718 !important;
}

.text-light {
  color: #ecf0f1 !important;
}

a.text-light:hover, a.text-light:focus {
  color: #c0cdd1 !important;
}

.text-dark {
  color: #7b8a8b !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #576263 !important;
}

.text-body {
  color: #212529 !important;
}

.text-muted {
  color: #95a5a6 !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-break: break-word !important;
  word-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #b4bcc2;
    page-break-inside: avoid;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #dee2e6;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}
.pagination a:hover {
  text-decoration: none;
}

.badge.bg-light {
  color: #7b8a8b;
}

.alert {
  color: #fff;
  border: none;
}
.alert a,
.alert .alert-link {
  color: #fff;
  text-decoration: underline;
}
.alert-primary {
  background-color: #2c3e50;
}
.alert-secondary {
  background-color: #95a5a6;
}
.alert-success {
  background-color: #18bc9c;
}
.alert-info {
  background-color: #3498db;
}
.alert-warning {
  background-color: #f39c12;
}
.alert-danger {
  background-color: #e74c3c;
}
.alert-light {
  background-color: #ecf0f1;
}
.alert-dark {
  background-color: #7b8a8b;
}
.alert-light,
.alert-light a,
.alert-light .alert-link {
  color: #212529;
}

.modal .btn-close,
.toast .btn-close,
.offcanvas .btn-close {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
}

:root {
  --font-heading: 2.5rem;
  --font-title: 2rem;
  --font-subtitle: 1.5rem;
  --font-default: 19px;
  --secondary-color: #ecf0f1;
  --text-color: #2c3e50;
  --blue: #007bff;
  --red: #dc3545;
  --yellow: #ffc107;
  --green: #28a745;
  --success: var(--green);
  --navbar-margin-bottom: 21px;
  --navbar-toggler-padding-x: .75rem;
  --white: #fff;
  --gray-100: #f8f9fa;
  --gray-200: #e9ecef;
  --gray-300: #dee2e6;
  --gray-400: #ced4da;
  --gray-500: #adb5bd;
  --gray-600: #6c757d;
  --gray-700: #495057;
  --gray-7500: #e9ecec;
  --gray-800: #343a40;
  --gray-900: #212529;
  --black: #000;
}

/* Basic styles
   ------------------------------------------------------------------------- */
h1, .h1 {
  font-size: var(--font-heading);
}

h3, .h3 {
  font-size: var(--font-subtitle);
}

p, ul, ol {
  font-size: var(--font-default);
  margin-bottom: 1.5em;
}

strong {
  font-weight: bold;
}

li:not(.nav-item) {
  margin-bottom: 0.5em;
}

code {
  background: var(--secondary-color);
  border-radius: 4px;
  color: var(--text-color);
  font-size: 90%;
  padding: 2px 4px;
}

.text-danger, .text-danger:hover {
  color: var(--red);
}

i {
  margin-right: 0.25em;
}

.table.table-middle-aligned th,
.table.table-middle-aligned td {
  vertical-align: middle;
}

.doclink {
  color: inherit;
}

a:hover {
  text-decoration: none;
}

.help-block {
  display: block;
}

.alert-danger ul {
  margin-bottom: 0;
}

.btn {
  padding: 10px 15px;
}

form legend {
  font-size: 22.5px;
}

/* Utilities
   ------------------------------------------------------------------------- */
.jumbotron {
  padding: 1.5rem 1rem;
}

.well {
  background-color: var(--secondary-color);
  border: 1px solid transparent;
  border-radius: 4px;
  margin-bottom: 20px;
  min-height: 20px;
  padding: 19px;
}

/* Page elements
   ------------------------------------------------------------------------- */
body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

body:not(#homepage) {
  padding-top: 110px;
}

header nav.navbar {
  margin-bottom: var(--navbar-margin-bottom);
}

header nav.navbar .navbar-brand {
  padding: 0;
}

header nav.navbar .navbar-toggler {
  padding: 0 var(--navbar-toggler-padding-x);
}

header nav.navbar .nav-item {
  font-size: 18px;
  margin-left: 20px;
}

.modal-backdrop {
  /* needed to lower the default 1,040 value which interferes with some styles */
  z-index: 1024;
}

#locale-selector-modal {
  background: var(--text-color);
}

@media (min-width: 768px) {
  #locale-selector-modal .modal-dialog {
    max-width: 800px;
    width: 96%;
  }
}
#locale-selector-modal .modal-content {
  border: 0;
}

#locale-selector-modal .modal-header {
  background: var(--text-color);
  border-bottom: 0;
  color: var(--white);
}

#locale-selector-modal .modal-header .close {
  color: var(--white);
  opacity: 1;
}

#locale-selector-modal .modal-body {
  background: var(--text-color);
}

#locale-selector-modal .modal-body .locales {
  list-style: none;
  padding: 0;
}

@media (min-width: 768px) {
  #locale-selector-modal .modal-body .locales {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px 20px;
  }
}
#locale-selector-modal .modal-body .locales li {
  border-radius: 4px;
  margin-bottom: 10px;
  position: relative;
}

@media (min-width: 768px) {
  #locale-selector-modal .modal-body .locales li {
    margin: 0;
  }
}
#locale-selector-modal .modal-body .locales li.rtl a {
  direction: rtl;
}

#locale-selector-modal .modal-body .locales li a {
  align-items: center;
  background: #fff;
  border-radius: 4px;
  color: var(--gray-900);
  display: flex;
  justify-content: space-between;
  padding: 10px 20px;
}

#locale-selector-modal .modal-body .locales li a small {
  border-radius: 4px;
  border: 2px solid var(--gray-300);
  color: var(--gray-800);
  font-size: 14px;
  font-weight: bold;
  line-height: 1.1;
  margin-inline-start: 10px;
  min-width: 26px;
  padding: 2px 6px;
  text-align: center;
  text-transform: uppercase;
}

#locale-selector-modal .modal-body .locales li:hover a {
  outline: 3px solid #18bc9c;
  outline-offset: -5px;
}

#locale-selector-modal .modal-body .locales li:hover a small {
  background: #18bc9c;
  border-color: #18bc9c;
  color: #fff;
}

#locale-selector-modal .modal-body .locales li.active a,
#locale-selector-modal .modal-body .locales li:hover.active a {
  background: #18bc9c;
  color: #fff;
  outline: none;
}

#locale-selector-modal .modal-body .locales li.active a small,
#locale-selector-modal .modal-body .locales li:hover.active a small {
  background: transparent;
  border-color: #fff;
  color: #fff;
}

.body-container {
  flex: 1;
  /* needed to prevent pages with a very small height and browsers not supporting flex */
  min-height: 600px;
}

.body-container #main h1, .body-container #main h2 {
  margin-top: 0;
}

#sidebar .section {
  margin-bottom: 2em;
}

#sidebar p {
  font-size: 15px;
}

#sidebar p + p {
  margin: 1.5em 0 0;
}

.btn-secondary {
  color: #fff;
}

footer {
  background: var(--secondary-color);
  margin-top: 2em;
  padding-top: 2em;
  padding-bottom: 2em;
}

footer p {
  color: var(--gray-700);
  font-size: 13px;
  margin-bottom: 0.25em;
}

footer #footer-resources {
  text-align: right;
}

footer #footer-resources i {
  color: var(--gray-700);
  font-size: 28.5px;
  margin-left: 0.5em;
}

#sourceCodeModal .modal-header {
  border-bottom: 0;
  padding: 1rem 1rem 0;
}

#sourceCodeModal .modal-header h3 {
  font-size: 18px;
  margin-top: 0;
}

#sourceCodeModal .nav-tabs {
  border-bottom-color: #95a5a6;
  margin-bottom: 15px;
}

#sourceCodeModal .nav-tabs .nav-link {
  font-size: 16px;
}

#sourceCodeModal .nav-tabs .nav-link.active {
  border-color: #95a5a6 #95a5a6 #fff;
}

#sourceCodeModal .nav-tabs .nav-link:not(.active):hover {
  border-color: transparent;
  text-decoration: underline;
}

#sourceCodeModal .tab-content .file-link {
  font-size: 16px;
  margin: 0 0 10px 5px;
}

#sourceCodeModal pre {
  margin-bottom: 0;
  padding: 0;
  display: block;
  word-break: break-all;
  word-wrap: break-word;
}

#sourceCodeModal pre code {
  border-radius: 6px;
  white-space: pre-wrap;
}

#confirmationModal .modal-dialog {
  width: 500px;
}

#confirmationModal .modal-footer button {
  min-width: 75px;
}

/* Misc. elements
   ------------------------------------------------------------------------- */
.section.rss a {
  color: var(--orange);
  font-size: 21px;
}

/* Forms
   ------------------------------------------------------------------------- */
.form-control {
  color: var(--gray-700);
  height: 45px;
}

.form-group .form-control:focus {
  color: var(--text-color);
}

.form-group.has-error .form-control {
  border-color: var(--red);
}

.form-group.has-error .control-label {
  color: var(--red);
}

.form-group.has-error .help-block {
  background-color: var(--red);
  color: var(--white);
  font-size: 15px;
  padding: 1em;
}

.form-group.has-error .help-block ul,
.form-group.has-error .help-block li {
  margin-bottom: 0;
}

.form-group.has-error .help-block li + li {
  margin-top: 0.5em;
}

textarea {
  max-width: 100%;
}

/* Page: 'Technical Requirements Checker'
   ------------------------------------------------------------------------- */
body#requirements_checker header h1 {
  margin-bottom: 0;
  margin-top: 0;
}

body#requirements_checker header h1 span {
  font-size: 120%;
  opacity: 0.7;
  padding: 0 5px;
}

body#requirements_checker .panel li {
  margin-bottom: 1em;
}

/* Page: 'Homepage'
   ------------------------------------------------------------------------- */
body#homepage {
  text-align: center;
}

body#homepage .page-header {
  display: flex;
  justify-content: space-between;
  padding-bottom: 9.5px;
  margin: 60px 0 30px;
}

body#homepage .page-header h1 {
  font-size: 32px;
  margin: 0;
}

body#homepage .page-header a.language-selector-dropdown-button {
  align-items: center;
  border: 2px solid var(--gray-300);
  border-radius: 4px;
  color: inherit;
  display: inline-flex;
  font-size: 16px;
  line-height: 1;
  padding: 5px 15px;
}

body#homepage .page-header a.language-selector-dropdown-button:hover {
  background: var(--gray-100);
  border-color: var(--gray-800);
}

body#homepage .page-header a.language-selector-dropdown-button .current-language {
  display: inline-flex;
  margin-inline: 5px 10px;
}

body#homepage .jumbotron {
  display: flex;
  flex-direction: column;
  height: 100%;
  justify-content: center;
  padding: 45px 15px;
}

body#homepage .jumbotron .btn {
  font-size: 19px;
  line-height: 1.33333;
  padding: 18px 27px;
  border-radius: 6px;
  margin-top: 20px;
}

body#homepage .jumbotron P {
  margin-bottom: 0;
  font-size: 23px;
  font-weight: 400;
}

/* Page: 'Login'
   ------------------------------------------------------------------------- */
body#login #login-users-help p {
  font-size: 15px;
  line-height: 1.42857;
}

body#login #login-users-help p:last-child {
  margin-bottom: 0;
}

body#login #login-users-help p .label {
  margin-right: 5px;
}

body#login #login-users-help p .console {
  display: block;
  margin: 5px 0;
  padding: 10px;
}

body#login .form-group-password {
  position: relative;
}

body#login .form-group-password input {
  padding-right: 48px;
}

body#login .form-group-password button {
  background: transparent;
  border: 0;
  color: var(--text-color);
  height: 45px;
  outline: 0;
  position: absolute;
  bottom: 0;
  right: 0;
}

body#login #login-help table td {
  vertical-align: middle;
}

/* Common Blog page elements
   ------------------------------------------------------------------------- */
.post h2 {
  font-size: var(--font-title);
}

.post-metadata {
  color: var(--gray-600);
  font-size: var(--font-default);
  margin-bottom: 16px;
}

.post-metadata .metadata {
  margin-right: 1.5em;
}

.post-tags .badge {
  margin-right: 5px;
  color: var(--gray-700);
  padding: 0.5rem 0.75rem;
  background-color: var(--gray-200);
}

.post-tags .badge.badge-success {
  background-color: var(--success);
  color: var(--white);
}

/* Page: 'Blog index'
   ------------------------------------------------------------------------- */
body#blog_index #main h1,
body#blog_index #main p {
  margin-bottom: 0.5em;
}

body#blog_index article.post {
  margin-bottom: 3em;
}

body#blog_index .post-metadata {
  font-size: 16px;
  margin-bottom: 8px;
}

body#blog_index .post-tags .label-default {
  background-color: var(--gray-7500);
  color: #6d8283;
}

body#blog_index .post-tags .label-default i {
  color: #a3b2b2;
}

/* Page: 'Blog post show'
   ------------------------------------------------------------------------- */
body#blog_post_show #main h3 {
  margin-bottom: 0.75em;
}

body#blog_post_show .post-tags .label-default {
  background-color: var(--gray-7500);
  color: #6D8283;
  font-size: 16px;
  margin-right: 10px;
  padding: 0.4em 1em 0.5em;
}

body#blog_post_show .post-tags .label-default i {
  color: #95A6A7;
}

body#blog_post_show #post-add-comment {
  margin: 2em 0;
}

body#blog_post_show #post-add-comment p {
  margin-bottom: 0;
}

body#blog_post_show #post-add-comment p a.btn {
  margin-right: 0.5em;
}

body#blog_post_show .post-comment {
  margin-bottom: 2em;
}

body#blog_post_show .post-comment h4 {
  font-size: 13px;
  line-height: 1.42857;
  margin-top: 0;
}

body#blog_post_show .post-comment h4 strong {
  display: block;
}

/* Page: 'Comment form error'
   ------------------------------------------------------------------------- */
body#comment_form_error h1.text-danger {
  margin-bottom: 1em;
}

@media (min-width: 768px) and (max-width: 1200px) {
  .container {
    width: 98%;
  }
}
/* Page: 'Blog search'
   ------------------------------------------------------------------------- */
body#blog_search #main h1,
body#blog_search #main p {
  margin-bottom: 0.5em;
}

body#blog_search article.post:first-child {
  margin-top: 2em;
}

body#blog_search article.post {
  margin-bottom: 2em;
}

body#blog_search .post-metadata {
  font-size: 16px;
  margin-bottom: 8px;
}

.input-group button.btn {
  padding-bottom: 0;
  padding-top: 0;
}

/*# sourceMappingURL=data:application/json;charset=utf-8,%7B%22version%22:3,%22sourceRoot%22:%22%22,%22sources%22:%5B%22../../vendor/twbs/bootstrap/scss/bootstrap.scss%22,%22../../assets/styles/bootswatch/_bootswatch.scss%22,%22../../vendor/twbs/bootstrap/scss/_root.scss%22,%22../../vendor/twbs/bootstrap/scss/_reboot.scss%22,%22../../assets/styles/bootswatch/_variables.scss%22,%22../../vendor/twbs/bootstrap/scss/vendor/_rfs.scss%22,%22../../vendor/twbs/bootstrap/scss/_variables.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_hover.scss%22,%22../../assets/styles/_variables.scss%22,%22../../vendor/twbs/bootstrap/scss/_type.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_lists.scss%22,%22../../vendor/twbs/bootstrap/scss/_images.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_image.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_border-radius.scss%22,%22../../vendor/twbs/bootstrap/scss/_code.scss%22,%22../../vendor/twbs/bootstrap/scss/_grid.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_grid.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_breakpoints.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_grid-framework.scss%22,%22../../vendor/twbs/bootstrap/scss/_tables.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_table-row.scss%22,%22../../vendor/twbs/bootstrap/scss/_forms.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_transition.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_forms.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_gradients.scss%22,%22../../vendor/twbs/bootstrap/scss/_buttons.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_buttons.scss%22,%22../../vendor/twbs/bootstrap/scss/_transitions.scss%22,%22../../vendor/twbs/bootstrap/scss/_dropdown.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_caret.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_nav-divider.scss%22,%22../../vendor/twbs/bootstrap/scss/_button-group.scss%22,%22../../vendor/twbs/bootstrap/scss/_input-group.scss%22,%22../../vendor/twbs/bootstrap/scss/_custom-forms.scss%22,%22../../vendor/twbs/bootstrap/scss/_nav.scss%22,%22../../vendor/twbs/bootstrap/scss/_navbar.scss%22,%22../../vendor/twbs/bootstrap/scss/_card.scss%22,%22../../vendor/twbs/bootstrap/scss/_breadcrumb.scss%22,%22../../vendor/twbs/bootstrap/scss/_pagination.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_pagination.scss%22,%22../../vendor/twbs/bootstrap/scss/_badge.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_badge.scss%22,%22../../vendor/twbs/bootstrap/scss/_jumbotron.scss%22,%22../../vendor/twbs/bootstrap/scss/_alert.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_alert.scss%22,%22../../vendor/twbs/bootstrap/scss/_progress.scss%22,%22../../vendor/twbs/bootstrap/scss/_media.scss%22,%22../../vendor/twbs/bootstrap/scss/_list-group.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_list-group.scss%22,%22../../vendor/twbs/bootstrap/scss/_close.scss%22,%22../../vendor/twbs/bootstrap/scss/_toasts.scss%22,%22../../vendor/twbs/bootstrap/scss/_modal.scss%22,%22../../vendor/twbs/bootstrap/scss/_tooltip.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_reset-text.scss%22,%22../../vendor/twbs/bootstrap/scss/_popover.scss%22,%22../../vendor/twbs/bootstrap/scss/_carousel.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_clearfix.scss%22,%22../../vendor/twbs/bootstrap/scss/_spinners.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_align.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_background-variant.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_background.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_borders.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_display.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_embed.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_flex.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_float.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_interactions.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_overflow.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_position.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_screenreaders.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_screen-reader.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_shadows.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_sizing.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_spacing.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_stretched-link.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_text.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_text-truncate.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_text-emphasis.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_text-hide.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_visibility.scss%22,%22../../vendor/twbs/bootstrap/scss/_print.scss%22,%22../../assets/styles/app.scss%22%5D,%22names%22:%5B%5D,%22mappings%22:%22;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;ACQU;ACRV;EAGI;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAIA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAAA;EAIA;EAAA;EAAA;EAAA;EAAA;EAKF;EACA;;;ACCF;AAAA;AAAA;EAGE;;;AAGF;EACE;EACA;EACA;EACA;;;AAMF;EACE;;;AAUF;EACE;EACA,aCG4B;ECkIxB;EFnIJ,aG+O4B;EH9O5B,aGmP4B;EHlP5B,OCjCS;EDkCT;EACA,kBC5CS;;;ADwDX;EACE;;;AASF;EACE;EACA;EACA;;;AAaF;EACE;EACA,eGiN4B;;;AH1M9B;EACE;EACA,eGoF0B;;;AHzE5B;AAAA;EAEE;EACA;EACA;EACA;EACA;;;AAGF;EACE;EACA;EACA;;;AAGF;AAAA;AAAA;EAGE;EACA;;;AAGF;AAAA;AAAA;AAAA;EAIE;;;AAGF;EACE,aGkJ4B;;;AH/I9B;EACE;EACA;;;AAGF;EACE;;;AAGF;AAAA;EAEE,aGqI4B;;;AHlI9B;EEII;;;AFKJ;AAAA;EAEE;EEPE;EFSF;EACA;;;AAGF;EAAM;;;AACN;EAAM;;;AAON;EACE,OC9JQ;ED+JR,iBGXwC;EHYxC;;AIhLA;EJmLE,OGdsC;EHetC,iBGdsC;;;AHuB1C;EACE;EACA;;AI/LA;EJkME;EACA;;;AASJ;AAAA;AAAA;AAAA;EAIE,aG0D4B;EDlH1B;;;AF4DJ;EAEE;EAEA;EAEA;EAGA;;;AAQF;EAEE;;;AAQF;EACE;EACA;;;AAGF;EAGE;EACA;;;AAQF;EACE;;;AAGF;EACE,aKjQmB;ELkQnB,gBKlQmB;ELmQnB,OCpQS;EDqQT;EACA;;;AAOF;EAEE;EACA;;;AAQF;EAEE;EACA,eG4JsC;;;AHtJxC;EAEE;;;AAQF;EACE;;;AAGF;AAAA;AAAA;AAAA;AAAA;EAKE;EACA;EEhKE;EFkKF;;;AAGF;AAAA;EAEE;;;AAGF;AAAA;EAEE;;;AAMF;EACE;;;AAMF;EACE;;;AAOF;AAAA;AAAA;AAAA;EAIE;;;AASE;AAAA;AAAA;AAAA;EACE;;;AAMN;AAAA;AAAA;AAAA;EAIE;EACA;;;AAGF;AAAA;EAEE;EACA;;;AAIF;EACE;EAEA;;;AAGF;EAME;EAEA;EACA;EACA;;;AAKF;EACE;EACA;EACA;EACA;EACA;EE9OI;EFgPJ;EACA;EACA;;;AAGF;EACE;;;AAIF;AAAA;EAEE;;;AAGF;EAKE;EACA;;;AAOF;EACE;;;AAQF;EACE;EACA;;;AAOF;EACE;;;AAGF;EACE;EACA;;;AAGF;EACE;;;AAKF;EACE;;;AM5dF;AAAA;EAEE,eHsS4B;EGpS5B,aHsS4B;EGrS5B,aHsS4B;;;AGlS9B;EJqKM;;;AIpKN;EJoKM;;;AInKN;EJmKM;;;AIlKN;EJkKM;;;AIjKN;EJiKM;;;AIhKN;EJgKM;;;AI9JN;EJ8JM;EI5JJ,aHwS4B;;;AGpS9B;EJwJM;EItJJ,aH2R4B;EG1R5B,aHkR4B;;;AGhR9B;EJmJM;EIjJJ,aHuR4B;EGtR5B,aH6Q4B;;;AG3Q9B;EJ8IM;EI5IJ,aHmR4B;EGlR5B,aHwQ4B;;;AGtQ9B;EJyIM;EIvIJ,aH+Q4B;EG9Q5B,aHmQ4B;;;AG3P9B;EACE,YHgFO;EG/EP,eH+EO;EG9EP;EACA;;;AAQF;AAAA;EJkGI;EI/FF,aH2N4B;;;AGxN9B;AAAA;EAEE,SHmQ4B;EGlQ5B,kBH2Q4B;;;AGnQ9B;EC/EE;EACA;;;ADmFF;ECpFE;EACA;;;ADsFF;EACE;;AAEA;EACE,cHqP0B;;;AG3O9B;EJ2DI;EIzDF;;;AAIF;EACE,eHuBO;ED6CH;;;AIhEN;EACE;EJ+CE;EI7CF,OLxGS;;AK0GT;EACE;;;AEnHJ;ECIE;EAGA;;;ADDF;EACE,SLqgCkC;EKpgClC,kBPNS;EOOT;EEEE;EDPF;EAGA;;;ADcF;EAEE;;;AAGF;EACE;EACA;;;AAGF;EN8HI;EM5HF,OPzBS;;;AUdX;ETmKI;ESjKF,OVqBQ;EUpBR;;AAGA;EACE;;;AAKJ;EACE;ETsJE;ESpJF,OVPS;EUQT,kBVCS;ESAP;;ACGF;EACE;ET8IA;ES5IA,aRyQ0B;;;AQnQ9B;EACE;ETqIE;ESnIF,OVfS;;AUkBT;ETgIE;ES9HA;EACA;;;AAKJ;EACE,YRikCkC;E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C+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADQN;EC3DA;EFAE,kBlBsEW;EoBpEb,cpBoEa;;AChEb;EmBAE;EFNA,kBED2D;EAS3D,cATqG;;AAYvG;EAEE;EFbA,kBED2D;EAgB3D,cAhBqG;EAqBnG;;AAKJ;EAEE;EACA,kBpB0CW;EoBzCX,cpByCW;;AoBlCb;EAGE;EACA,kBAzC+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADQN;EC3DA;EFAE,kBlBsEW;EoBpEb,cpBoEa;;AChEb;EmBAE;EFNA,kBED2D;EAS3D,cATqG;;AAYvG;EAEE;EFbA,kBED2D;EAgB3D,cAhBqG;EAqBnG;;AAKJ;EAEE;EACA,kBpB0CW;EoBzCX,cpByCW;;AoBlCb;EAGE;EACA,kBAzC+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADQN;EC3DA;EFAE,kBlBsEW;EoBpEb,cpBoEa;;AChEb;EmBAE;EFNA,kBED2D;EAS3D,cATqG;;AAYvG;EAEE;EFbA,kBED2D;EAgB3D,cAhBqG;EAqBnG;;AAKJ;EAEE;EACA,kBpB0CW;EoBzCX,cpByCW;;AoBlCb;EAGE;EACA,kBAzC+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADQN;EC3DA;EFAE,kBlBsEW;EoBpEb,cpBoEa;;AChEb;EmBAE;EFNA,kBED2D;EAS3D,cATqG;;AAYvG;EAEE;EFbA,kBED2D;EAgB3D,cAhBqG;EAqBnG;;AAKJ;EAEE;EACA,kBpB0CW;EoBzCX,cpByCW;;AoBlCb;EAGE;EACA,kBAzC+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADQN;EC3DA;EFAE,kBlBsEW;EoBpEb,cpBoEa;;AChEb;EmBAE;EFNA,kBED2D;EAS3D,cATqG;;AAYvG;EAEE;EFbA,kBED2D;EAgB3D,cAhBqG;EAqBnG;;AAKJ;EAEE;EACA,kBpB0CW;EoBzCX,cpByCW;;AoBlCb;EAGE;EACA,kBAzC+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADQN;EC3DA;EFAE,kBlBsEW;EoBpEb,cpBoEa;;AChEb;EmBAE;EFNA,kBED2D;EAS3D,cATqG;;AAYvG;EAEE;EFbA,kBED2D;EAgB3D,cAhBqG;EAqBnG;;AAKJ;EAEE;EACA,kBpB0CW;EoBzCX,cpByCW;;AoBlCb;EAGE;EACA,kBAzC+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADQN;EC3DA;EFAE,kBlBsEW;EoBpEb,cpBoEa;;AChEb;EmBAE;EFNA,kBED2D;EAS3D,cATqG;;AAYvG;EAEE;EFbA,kBED2D;EAgB3D,cAhBqG;EAqBnG;;AAKJ;EAEE;EACA,kBpB0CW;EoBzCX,cpByCW;;AoBlCb;EAGE;EACA,kBAzC+I;EA6C/I,cA7CyL;;AA+CzL;EAKI;;;ADcN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADzBN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADzBN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADzBN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADzBN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADzBN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADzBN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADzBN;ECPA,OpBYa;EoBXb,cpBWa;;AChEb;EmBwDE,OALgD;EAMhD,kBpBOW;EoBNX,cpBMW;;AoBHb;EAEE;;AAGF;EAEE,OpBJW;EoBKX;;AAGF;EAGE;EACA,kBpBZW;EoBaX,cpBbW;;AoBeX;EAKI;;;ADdR;EACE,anB6M4B;EmB5M5B,OrBxDQ;EqByDR,iBnB2FwC;;ACpKxC;EkB4EE,OnByFsC;EmBxFtC,iBnByFsC;;AmBtFxC;EAEE,iBnBoFsC;;AmBjFxC;EAEE,OrBpFO;EqBqFP;;;AAWJ;ECPE;ErB4EI;EqB1EJ,apB+H4B;EOvN1B;;;AYiGJ;ECXE;ErB4EI;EqB1EJ,apBgI4B;EOxN1B;;;AY0GJ;EACE;EACA;;AAGA;EACE,YnBwT0B;;;AmBhT5B;AAAA;AAAA;EACE;;;AE3IJ;ELgBM,YKfJ;;ALmBI;EKpBN;ILqBQ;;;AKlBN;EACE;;;AAKF;EACE;;;AAIJ;EACE;EACA;EACA;ELDI,YKEJ;;ALEI;EKNN;ILOQ;;;AKDN;EACE;EACA;ELNE,YKOF;;ALHE;EKAJ;ILCM;;;;AMpBR;AAAA;AAAA;AAAA;EAIE;;;AAGF;EACE;;ACoBE;EACE;EACA,avB+NwB;EuB9NxB,gBvB6NwB;EuB5NxB;EAhCJ;EACA;EACA;EACA;;AAqDE;EACE;;;AD1CN;EACE;EACA;EACA;EACA,StBypBkC;EsBxpBlC;EACA;EACA,WtBiuBkC;EsBhuBlC;EACA;EvB2JI;EuBzJJ,OxBTS;EwBUT;EACA;EACA,kBxBrBS;EwBsBT;EACA;EfdE;;;AeuBA;EACE;EACA;;;AAGF;EACE;EACA;;;AXYF;EWnBA;IACE;IACA;;EAGF;IACE;IACA;;;AXYF;EWnBA;IACE;IACA;;EAGF;IACE;IA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boC;;A2BnbtC;EACE,O7B3CO;E6B4CP,kB3Bkf4C;E2Bjf5C,c3Bif4C;;A2B1e5C;EACE,O7B/CK;;A6BiDL;EACE,kB7BtDG;;;A6BgEX;EACE;EACA;EAEA;;AAIA;EACE;EACA;EACA;EACA;EACA,O3BwboC;E2BvbpC,Q3BuboC;E2BtbpC;EACA;EACA,kB7BnFO;E6BoFP;;AAKF;EACE;EACA;EACA;EACA;EACA,O3ByaoC;E2BxapC,Q3BwaoC;E2BvapC;EACA;;;AAUF;EpBlGE;;AoBuGA;EACE;;AAKF;EACE,c3B0HwB;EkBpP1B,kBlBoP0B;;A2BtH1B;EACE;;AAKF;ETpIA,kBlByhB4C;;A2BlZ5C;ETvIA,kBlByhB4C;;;A2BvY9C;EAEE,e3B0Z4C;;A2BtZ5C;EACE;;AAKF;ET9JA,kBlByhB4C;;;A2BhXhD;EACE;;AAGE;EACE;EACA,O3BkY0C;E2BjY1C;EAEA,e3BgY0C;;A2B7X5C;EACE;EACA;EACA,O3B2X0C;E2B1X1C,Q3B0X0C;E2BzX1C,kB7BlLK;E6BoLL,e3BsX0C;EgBxiB1C,YWmLA;;AX/KA;EWuKF;IXtKI;;;AWmLJ;EACE,kB7BhMK;E6BiML;;AAKF;ETzMA,kBlByhB4C;;;A2BnUhD;EACE;EACA;EACA,Q3BqRsC;E2BpRtC;E5B5CI;E4B+CJ,a3B6D4B;E2B5D5B,a3BiE4B;E2BhE5B,O7BrNS;E6BsNT;EACA;EACA;EpBtNE;EoByNF;;AAEA;EACE,c3BwPoC;E2BvPpC;EAKE,Y3BmW8B;;A2BhWhC;EAME,O7B7OK;E6B8OL,kB7BrPK;;A6ByPT;EAEE;EACA,e3B+H0B;E2B9H1B;;AAGF;EACE,O7B3PO;E6B4PP,kB7BhQO;;A6BoQT;EACE;;AAIF;EACE;EACA;;;AAIJ;EACE,Q3B0NsC;E2BzNtC,a3BiH4B;E2BhH5B,gB3BgH4B;E2B/G5B,c3BgH4B;ED1NxB;;;A4B8GN;EACE,Q3BmNsC;E2BlNtC,a3B8G4B;E2B7G5B,gB3B6G4B;E2B5G5B,c3B6G4B;ED/NxB;;;A4B2HN;EACE;EACA;EACA;EACA,Q3BiMsC;E2BhMtC;;;AAGF;EACE;EACA;EACA;EACA,Q3ByLsC;E2BxLtC;EACA;EACA;;AAEA;EACE,c3BqKoC;E2BpKpC,Y3ByE0B;;A2BrE5B;EAEE,kB7B7TO;;A6BiUP;EACE,S3B2Ta;;A2BvTjB;EACE;;;AAIJ;EACE;EACA;EACA;EACA;EACA;EACA,Q3BwJsC;E2BvJtC;EACA;EAEA,a3BhE4B;E2BiE5B,a3B5D4B;E2B6D5B,O7BlVS;E6BmVT,kB7B1VS;E6B2VT;EpBlVE;;AoBsVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA,Q3BiIoC;E2BhIpC;EACA,a3B5E0B;E2B6E1B,O7BlWO;E6BmWP;ET7WA,kBpBKO;E6B0WP;EpBnWA;;;AoB8WJ;EACE;EACA;EACA;EACA;EACA;;AAEA;EACE;;AAIA;EAA0B,Y3BoOe;;A2BnOzC;EAA0B,Y3BmOe;;A2BlOzC;EAA0B,Y3BkOe;;A2B/N3C;EACE;;AAGF;EACE,O3BoNyC;E2BnNzC,Q3BmNyC;E2BlNzC;ETlZA,kBlBoP0B;E2BgK1B,Q3BmNyC;EO3lBzC;ESFE,YW6YF;EACA;;AX1YE;EWiYJ;IXhYM;;;AW2YJ;ET1ZA,kBlB4mByC;;A2B7M3C;EACE,O3B6LgC;E2B5LhC,Q3B6LgC;E2B5LhC;EACA,Q3B4LgC;E2B3LhC,kB7B9ZO;E6B+ZP;EpBzZA;;AoB8ZF;EACE,O3ByLyC;E2BxLzC,Q3BwLyC;EkBpmBzC,kBlBoP0B;E2B0L1B,Q3ByLyC;EO3lBzC;ESFE,YWuaF;EACA;;AXpaE;EW4ZJ;IX3ZM;;;AWqaJ;ETpbA,kBlB4mByC;;A2BnL3C;EACE,O3BmKgC;E2BlKhC,Q3BmKgC;E2BlKhC;EACA,Q3BkKgC;E2BjKhC,kB7BxbO;E6BybP;EpBnbA;;AoBwbF;EACE,O3B+JyC;E2B9JzC,Q3B8JyC;E2B7JzC;EACA,c3BrE0B;E2BsE1B,a3BtE0B;EkBnY1B,kBlBoP0B;E2BuN1B,Q3B4JyC;EO3lBzC;ESFE,YWocF;EACA;;AXjcE;EWsbJ;IXrbM;;;AWkcJ;ETjdA,kBlB4mByC;;A2BtJ3C;EACE,O3BsIgC;E2BrIhC,Q3BsIgC;E2BrIhC;EACA,Q3BqIgC;E2BpIhC;EAC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;;;;AAUN;EACE;;AAEA;EACE;;AAEA;EACE;EvBvOF;EACA;;AuB0OA;EvBzPA;EACA;;AuB4PA;EvBtQA;EuBwQE;;;AC1RN;EACE;EACA;EACA;EACA,e/BqiCkC;E+BniClC;EACA,kBjCIS;ESOP;;;AwBLF;EACE,c/ByhCgC;;A+BvhChC;EACE;EACA,e/BqhC8B;E+BphC9B,OjCJK;EiCKL;;AAUJ;EACE;;AAGF;EACE;;AAGF;EACE,OjCxBO;;;AkCfX;EACE;E5BGA;EACA;EGaE;;;AyBZJ;EACE;EACA;EACA;EACA;EACA,ahCoxBkC;EgCnxBlC,OlCHS;EkCKT,kBlCcQ;EkCbR;;AAEA;EACE;EACA,OlCVO;EkCWP;EACA,kBlC0EgC;EkCzEhC,clC0EgC;;AkCvElC;EACE;EACA,ShC4wBgC;EgC3wBhC,YhC+W0B;;;AgCzW1B;EACE;EzBaF;EACA;;AyBTA;EzBNA;EACA;;AyBUF;EACE;EACA,OlCtCO;EkCuCP,kBlC+CgC;EkC9ChC,clCiDgC;;AkC9ClC;EACE,OlC1CO;EkC2CP;EAEA;EACA,kBlC2CgC;EkC1ChC,clC2CgC;;;AmClGlC;EACE;ElCgLE;EkC9KF,ajCmO0B;;AiC9NxB;E1BqCF;EACA;;A0BjCE;E1BkBF;EACA;;;A0BhCF;EACE;ElCgLE;EkC9KF,ajCoO0B;;AiC/NxB;E1BqCF;EACA;;A0BjCE;E1BkBF;EACA;;;A2B9BJ;EACE;EACA;EnC6JE;EmC3JF,alCwR4B;EkCvR5B;EACA;EACA;EACA;E3BKE;ESFE,YkBDJ;;AlBKI;EkBfN;IlBgBQ;;;AfLN;EiCGI;;;AAKJ;EACE;;;AAKJ;EACE;EACA;;;AAOF;EACE,elCi4BkC;EkCh4BlC,clCg4BkC;EOv5BhC;;;A2BgCF;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ADqCJ;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ADqCJ;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ADqCJ;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ADqCJ;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ADqCJ;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ADqCJ;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ADqCJ;ECjDA;EACA,kBnC0Ea;;AC5Db;EkCVI;EACA;;AAGF;EAEE;EACA;;;ACbN;EACE;EACA,epCyzBkC;EoCvzBlC,kBtCOS;ESOP;;AI0CA;EyB5DJ;IAQI;;;;AAIJ;EACE;EACA;E7BIE;;;A8BdJ;EACE;EACA;EACA,erCy9BkC;EqCx9BlC;E9BUE;;;A8BLJ;EAEE;;;AAIF;EACE,arC6Q4B;;;AqCrQ9B;EACE;;AAGA;EACE;EACA;EACA;EACA;EACA;EACA;;;AAUF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ADsCF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ADsCF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ADsCF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ADsCF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ADsCF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ADsCF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ADsCF;EC/CA,ODgDqH;EnB3CnH,kBmB2CuB;EC9CzB,cD8CqE;;AC5CrE;EACE;;AAGF;EACE;;;ACRF;EACE;IAAO;;EACP;IAAK;;;AAIT;EACE;EACA,QvCk+BkC;EuCj+BlC;EACA;ExCwKI;EwCtKJ,kBzCHS;ESOP;;;AgCCJ;EACE;EACA;EACA;EACA;EACA,OzCfS;EyCgBT;EACA;EACA,kBvCu9BkC;EgBl+B9B,YuBYJ;;AvBRI;EuBDN;IvBEQ;;;;AuBUR;ErBYE;EqBVA;;;AAIA;EACE;;AAGE;EAJJ;IAKM;;;;AC1CR;EACE;EACA;;;AAGF;EACE;;;ACFF;EACE;EACA;EAGA;EACA;ElCQE;;;AkCEJ;EACE;EACA,O3CNS;E2COT;;AxCPA;EwCWE;EACA,O3CZO;E2CaP;EACA,kB3CnBO;;A2CsBT;EACE,O3ChBO;E2CiBP,kB3CxBO;;;A2CiCX;EACE;EACA;EACA;EAGA,kB3CzCS;E2C0CT;;AAEA;ElC1BE;EACA;;AkC6BF;ElChBE;EACA;;AkCmBF;EAEE,O3ChDO;E2CiDP;EACA,kB3CtDO;;A2C0DT;EACE;EACA,O3C9DO;E2C+DP,kBzCkL0B;EyCjL1B,czCiL0B;;AyC9K5B;EACE;;AAEA;EACE;EACA,kBzC2JwB;;;AyC7I1B;EACE;;AAGE;ElC1BJ;EAZA;;AkC2CI;ElC3CJ;EAYA;;AkCoCI;EACE;;AAGF;EACE,kBzC0HoB;EyCzHpB;;AAEA;EACE;EACA,mBzCqHkB;;;AWhL1B;E8BmCA;IACE;;EAGE;IlC1BJ;IAZA;;EkC2CI;IlC3CJ;IAYA;;EkCoCI;IACE;;EAGF;IACE,kBzC0HoB;IyCzHpB;;EAEA;IACE;IACA,mBzCqHkB;;;AWhL1B;E8BmCA;IACE;;EAGE;IlC1BJ;IAZA;;EkC2CI;IlC3CJ;IAYA;;EkCoCI;IACE;;EAGF;IACE,kBzC0HoB;IyCzHpB;;EAEA;IACE;IACA,mBzCqHkB;;;AWhL1B;E8BmCA;IACE;;EAGE;IlC1BJ;IAZA;;EkC2CI;IlC3CJ;IAYA;;EkCoCI;IACE;;EAGF;IACE,kBzC0HoB;IyCzHpB;;EAEA;IACE;IACA,mBzCqHkB;;;AWhL1B;E8BmCA;IACE;;EAGE;IlC1BJ;IAZA;;EkC2CI;IlC3CJ;IAYA;;EkCoCI;IACE;;EAGF;IACE,kBzC0HoB;IyCzHpB;;EAEA;IACE;IACA,mBzCqHkB;;;AyCvG9B;ElCnHI;;AkCsHF;EACE;;AAEA;EACE;;;ACzIJ;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;ACrJxE;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;ACrJxE;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;ACrJxE;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;ACrJxE;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;ACrJxE;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;ACrJxE;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;ACrJxE;EACE,ODoJsE;ECnJtE,kBDmJuC;;AxCxIzC;EyCPM,OD+IkE;EC9IlE;;AAGF;EACE,O5CLG;E4CMH,kBDyIkE;ECxIlE,cDwIkE;;;AExJ1E;EACE;E5CmLI;E4CjLJ,a3C8R4B;E2C7R5B;EACA,O7CcS;E6CbT,a3CylCkC;E2CxlClC;;A1CKA;E0CDE,O7CQO;E6CPP;;A1CIF;E0CCI;;;AAWN;EACE;EACA;EACA;;;AAMF;EACE;;;ACtCF;EAGE,Y5C24BkC;E4C14BlC,W5C04BkC;ED1tB9B;E6C7KJ,kB5C44BkC;E4C34BlC;EACA;EACA,Y5C64BkC;E4C54BlC;ErCOE;;AqCJF;EACE,e5Cg4BgC;;A4C73BlC;EACE;;AAGF;EACE;EACA;;AAGF;EACE;;;AAIJ;EACE;EACA;EACA;EACA,O9CrBS;E8CsBT,kB5Cq3BkC;E4Cp3BlC;EACA;ErCZE;EACA;;;AqCeJ;EACE,S5Cm2BkC;;;A6Cz4BpC;EAEE;;AAEA;EACE;EACA;;;AAKJ;EACE;EACA;EACA;EACA,S7C4pBkC;E6C3pBlC;EACA;EACA;EACA;EAGA;;;AAOF;EACE;EACA;EACA,Q7Ci5BkC;E6C/4BlC;;AAGA;E7B3BI,Y6B4BF;EACA,W7Cu6BgC;;AgBh8B9B;E6BuBJ;I7BtBM;;;A6B0BN;EACE,W7Cq6BgC;;A6Cj6BlC;EACE,W7Ck6BgC;;;A6C95BpC;EACE;EACA;;AAEA;EACE;EACA;;AAGF;AAAA;EAEE;;AAGF;EACE;;;AAIJ;EACE;EACA;EACA;;AAGA;EACE;EACA;EACA;EACA;;AAIF;EACE;EACA;EACA;;AAEA;EACE;;AAGF;EACE;;;AAMN;EACE;EACA;EACA;EACA;EAGA;EACA,kB/CzGS;E+C0GT;EACA;EtClGE;EsCsGF;;;AAIF;EACE;EACA;EACA;EACA,S7CgjBkC;E6C/iBlC;EACA;EACA,kB/ChHS;;A+CmHT;EAAS;;AACT;EAAS,S7C+zByB;;;A6C1zBpC;EACE;EACA;EACA;EACA,S7C6zBkC;E6C5zBlC;EtCtHE;EACA;;AsCwHF;EACE,S7CwzBgC;E6CtzBhC;;;AAKJ;EACE;EACA,a7CuI4B;;;A6ClI9B;EACE;EAGA;EACA,S7C0wBkC;;;A6CtwBpC;EACE;EACA;EACA;EACA;EACA;EACA;EtCzIE;EACA;;AsC8IF;EACE;;;AAKJ;EACE;EACA;EACA;EACA;EACA;;;AlCvIE;EkC6IF;IACE,W7CuwBgC;I6CtwBhC;;EAGF;IACE;;EAEA;IACE;;EAIJ;IACE;;EAEA;IACE;IACA;;EAQJ;IAAY,W7C+uBsB;;;AWt5BhC;EkC2KF;AAAA;IAEE,W7CuuBgC;;;AWp5BhC;EkCkLF;IAAY,W7CiuBsB;;;A8C98BpC;EACE;EACA,S9CgrBkC;E8C/qBlC;EACA,Q9C61BkC;E+Cj2BlC,ajDiD4B;EiD/C5B;EACA,a/C4R4B;E+C3R5B,a/CgS4B;E+C/R5B;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EhDqKI;E+CzKJ;EACA;;AAEA;EAAS,S9Ci1ByB;;A8C/0BlC;EACE;EACA;EACA,O9Ci1BgC;E8Ch1BhC,Q9Ci1BgC;;A8C/0BhC;EACE;EACA;EACA;EACA;;;AAKN;EACE;;AAEA;EACE;;AAEA;EACE;EACA;EACA,kBhDrBK;;;AgD0BX;EACE;;AAEA;EACE;EACA,O9CmzBgC;E8ClzBhC,Q9CizBgC;;A8C/yBhC;EACE;EACA;EACA,oBhDrCK;;;AgD0CX;EACE;;AAEA;EACE;;AAEA;EACE;EACA;EACA,qBhDnDK;;;AgDwDX;EACE;;AAEA;EACE;EACA,O9CqxBgC;E8CpxBhC,Q9CmxBgC;;A8CjxBhC;EACE;EACA;EACA,mBhDnEK;;;AgDwFX;EACE,W9C+uBkC;E8C9uBlC;EACA,OhDrGS;EgDsGT;EACA,kBhD7FS;ESDP;;;AyClBJ;EACE;EACA;EACA;EACA,ShD8qBkC;EgD7qBlC;EACA,WhD+2BkC;E+Cp3BlC,ajDiD4B;EiD/C5B;EACA,a/C4R4B;E+C3R5B,a/CgS4B;E+C/R5B;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EhDqKI;EiDxKJ;EACA,kBlDJS;EkDKT;EACA;EzCGE;;AyCCF;EACE;EACA;EACA,OhD+2BgC;EgD92BhC,QhD+2BgC;EgD92BhC;;AAEA;EAEE;EACA;EACA;EACA;EACA;;;AAKN;EACE,ehDg2BkC;;AgD91BlC;EACE;;AAEA;EACE;EACA;EACA,kBhD21B8B;;AgDx1BhC;EACE,QhD0LwB;EgDzLxB;EACA,kBlD3CK;;;AkDgDX;EACE,ahD40BkC;;AgD10BlC;EACE;EACA,OhDw0BgC;EgDv0BhC,QhDs0BgC;EgDr0BhC;;AAEA;EACE;EACA;EACA,oBhDo0B8B;;AgDj0BhC;EACE,MhDmKwB;EgDlKxB;EACA,oBlDlEK;;;AkDuEX;EACE,YhDqzBkC;;AgDnzBlC;EACE;;AAEA;EACE;EACA;EACA,qBhDgzB8B;;AgD7yBhC;EACE,KhD+IwB;EgD9IxB;EACA,qBlDtFK;;AkD2FT;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AA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAgC;;EAChC;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAQF;IAAwB;;EACxB;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAwB;;EACxB;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAwB;;EACxB;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF;IAAwB;;EACxB;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAEF;AAAA;IAEE;;EAfF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F;EACE;EACA;EACA;;;AAEF;EACE;EACA;;;AAEF;EACE;;;AAEF;EACE;EACA;;;AAEF;EACE;IACE;IACA;IACA;;;AAGJ;EACE;EACA;EACA;;;AAEF;EACE;IACE;;;AAGJ;EACE;;;AAEF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;;;AAEF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAEF;EACE;EACA;;;AAEF;EACE;EACA;EACA;;;AAEF;AAAA;EAEE;EACA;EACA;;;AAEF;AAAA;EAEE;EACA;EACA;;;AAGF;EACE;AACA;EACA;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;EACA;EACA;EACA;;;AAGF;EACE;EACA;EACA;;;AAGF;EACE;;;AAGF;EACE;EACA;EACA;;;AAGF;EACE;EACA;;;AAEF;EAAoC;EAAiB;;;AACrD;EACE;EACA;;;AAEF;EAAuC;;;AACvC;EAA8C;;;AAC9C;EAA0D;EAA2B;;;AAEnF;EAAa;EAAiB;;;AAEhC;EACE;EACA;EACA;EACA;EACA;;;AAEF;EACE;EACA;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;AAAA;AAEA;EACE;EACA;;;AAGF;AAAA;AAEA;EACE;EACA;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;EACA;EACA;EACA;;;AAGF;AAAA;EAEE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;AAAA;AAEA;EACE;EACA;;;AAGF;EACE;EACA;EACA;;;AAGF;EACE;;;AAGF;AAAA;AAEA;EACE;;;AAEF;EACE;EACA;EACA;EACA;;;AAEF;EACE;EACA;;;AAEF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAEF;EACE;EACA;;;AAEF;EACE;EACA;;;AAEF;EACE;EACA;EACA;EACA;EACA;;;AAEF;EACE;EACA;EACA;EACA;EACA;;;AAEF;EACE;EACA;EACA;;;AAGF;AAAA;AAEA;EACE;EACA;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;EACA;EACA;;;AAGF;EACE;;;AAEF;EACE;;;AAEF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAGF;EACE;;;AAGF;AAAA;AAEA;EACE;;;AAGF;EACE;EACA;EACA;;;AAGF;EACE;;;AAGF;EACE;EACA;EACA;EACA;;;AAEF;EACE;EACA;;;AAGF;AAAA;AAEA;AAAA;EAEE;;;AAGF;EACE;;;AAGF;EACE;EACA;;;AAGF;EACE;EACA;;;AAGF;EACE;;;AAGF;AAAA;AAEA;EACE;;;AAGF;EACE;EACA;EACA;EACA;EACA;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;EACA;EACA;;;AAGF;EACE;;;AAGF;AAAA;AAEA;EACE;;;AAGF;EACE;IACE;;;AAIJ;AAAA;AAEA;AAAA;EAEE;;;AAGF;EACE;;;AAGF;EACE;;;AAGF;EACE;EACA;;;AAGF;EACE;EACA%22,%22file%22:%22app.output.css%22%7D */
";s:6:"digest";s:32:"cac2f9633dcb0441d1213d3a962a55ac";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:1:{i:0;s:65:"C:\Users\jkemp\OneDrive\Pulpit\api\czysta/var/sass/app.output.css";}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:15:"styles/app.scss";}