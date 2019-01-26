const path = require('path'),
  MiniCssExtractPlugin = require('mini-css-extract-plugin'),
  TerserPlugin = require('terser-webpack-plugin'),
  OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');

module.exports = {
  context: __dirname, // eslint-disable-line no-undef
  entry: {
    main: './src/main.js',
    editor: './src/editor.js',
    login: './src/login.js',
  },
  output: {
    path: path.resolve(__dirname, 'dist'), // eslint-disable-line no-undef
    filename: '[name].js',
  },
  resolve: {
    extensions: ['.js', '.scss', '.css', '.json'],
  },
  mode: 'development',
  devtool: 'none',
  module: {
    rules: [
      {
        test: /\.js?$/,
        loader: 'babel-loader',
      },
      {
        test: /\.(woff|woff2|eot|ttf)$/,
        loader: 'file-loader?limit=100000',
        query: {
          name: 'fonts/[name].[ext]',
        },
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        loader: 'file-loader',
        query: {
          name: 'img/[name].[ext]',
        },
      },
      {
        test: /\.s?css$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'postcss-loader',
            options: {
              indent: 'postcss',
              plugins: [require('autoprefixer')({ browsers: 'last 2 versions', grid: true })],
            },
          },
          {
            loader: 'sass-loader',
          },
        ],
      },
    ],
  },
  plugins: [new MiniCssExtractPlugin({ filename: '[name].css' })],
  optimization: {
    minimizer: [
      new TerserPlugin({
        parallel: true,
        terserOptions: {
          ecma: 6,
        },
      }),
      new OptimizeCssAssetsPlugin(),
    ],
  },
};
