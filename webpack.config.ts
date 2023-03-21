import * as path from "path";
import MiniCssExtractPlugin from "mini-css-extract-plugin";
import CssMinimizerPlugin from "css-minimizer-webpack-plugin";
import TerserPlugin from "terser-webpack-plugin";
import BrowserSyncPlugin from "browser-sync-webpack-plugin";

const proxy = {
  adress: "sb-dev-case.local",
  name: "SB WordPress Case",
};

export default (env: { mode: string }) => {
  // ----------------------------
  // Configuration: Entries
  // ----------------------------
  const entry = {
    script: path.resolve(__dirname, "src/scripts/main.ts"),
    style: path.resolve(__dirname, "src/styles/main.scss"),
  };

  // ----------------------------
  // Configuration: Output
  // ----------------------------
  const output = {
    filename: "[name].js",
    path: path.resolve(__dirname, "dist"),
    clean: true,
  };

  // ----------------------------
  // Configuration: Modules
  // ----------------------------
  const module = {
    rules: [
      {
        test: /\.tsx?$/,
        use: [
          {
            loader: "ts-loader"
          }
        ]
      },
      {
        test: /\.s[ac]ss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader"
          },
          {
            loader: "sass-loader",
          },
        ],
      },
    ],
  };

  // ----------------------------
  // Configuration: Resolve
  // ----------------------------
  const resolve = {
    extensions: [".ts", ".tsx", ".js"]
  }

  // ----------------------------
  // Configuration: Plugins
  // ----------------------------
  const defaultPlugins = [
    new MiniCssExtractPlugin(),
  ];

  const devPlugins = [
    new BrowserSyncPlugin(
      {
        proxy: proxy?.adress,
        logPrefix: proxy?.name,
        ui: false,
        files: ["**/*.php", "**/*.css", "**/*.js"],
        reloadDebounce: 1000,
      },
      { reload: false }
    ),
  ];

  const plugins =
    env.mode === "development" && proxy?.adress
      ? [...defaultPlugins, ...devPlugins]
      : [...defaultPlugins];

  // ----------------------------
  // Configuration: Devtool
  // ----------------------------
  const devtool = env.mode === "development" ? "source-map" : false;

  // ----------------------------
  // Configuration: Optimization
  // ----------------------------
  const optimization = {
    minimizer: [
      new CssMinimizerPlugin(),
      new TerserPlugin(),
    ],
  };

  // ----------------------------
  // Configuration: Watch Options
  // ----------------------------
  const watchOptions = {
    aggregateTimeout: 500,
    ignored: "/node_modules/",
  };

  // ----------------------------
  // Configuration: Mode
  // ----------------------------
  const mode = env.mode;

  const config = {
    entry,
    output,
    module,
    resolve,
    plugins,
    devtool,
    optimization,
    watchOptions,
    mode,
  };

  return config;
};
