const path = require('path'),
  MiniCssExtractPlugin = require('mini-css-extract-plugin'),
  TerserPlugin = require('terser-webpack-plugin'),
  OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin'),
  WebpackAssetsManifest = require('webpack-assets-manifest'),
  { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  context: __dirname, // eslint-disable-line no-undef
  entry: {
    main: './src/main.js',
    editor: './src/editor.js',
    login: './src/login.js',
  },
  output: {
    path: path.resolve(__dirname, 'dist'), // eslint-disable-line no-undef
    filename: '[name].[contenthash].js',
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
        loader: 'file-loader',
        query: {
          name: 'fonts/[name].[contenthash].[ext]',
        },
      },
      {
        test: /\.(svg|png|jpg|gif)$/,
        loader: 'file-loader',
        query: {
          name: 'img/[name].[contenthash].[ext]',
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
              plugins: [
                require('autoprefixer')({
                  browsers: 'last 2 versions',
                  grid: true,
                }),
              ],
            },
          },
          {
            loader: 'sass-loader',
          },
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanStaleWebpackAssets: false,
    }),
    new MiniCssExtractPlugin({
      filename: '[name].[contenthash].css',
    }),
    new WebpackAssetsManifest(),
  ],
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
