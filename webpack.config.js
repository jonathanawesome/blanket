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
    blocks: './src/blocks.js',
    login: './src/login.js',
  },
  output: {
    path: path.resolve(__dirname, 'dist'), // eslint-disable-line no-undef
    filename: '[name].[contenthash].js',
  },
  resolve: {
    extensions: ['.js', '.scss', '.css'],
  },
  devtool: 'none',
  node: {
    fs: 'empty',
  },
  module: {
    rules: [
      {
        test: /\.js?$/,
        loader: 'babel-loader',
      },
      {
        test: /\.(woff)$/,
        use: [
          {
            loader: 'url-loader',
            options: {
              name: 'fonts/[name].[contenthash].[ext]',
            },
          },
        ],
      },
      {
        test: /\.(png|jpg|gif|svg)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              // limit: 8192, // in bytes
              name: 'img/[name].[contenthash].[ext]',
            },
          },
        ],
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
              plugins: [require('autoprefixer')],
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
    new WebpackAssetsManifest(),
    new MiniCssExtractPlugin({
      filename: '[name].[contenthash].css',
    }),
    new CleanWebpackPlugin({
      // cleanwebpackplugin likes to remove img files from dist on watch...this is a fix
      cleanAfterEveryBuildPatterns: ['!**/*.png', '!**/*.jpg', '!**/*.gif', '!**/*.svg'],
    }),
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
