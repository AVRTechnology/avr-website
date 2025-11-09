import ClientProvider from "@/components/ClientProvider";
import "./globals.css";

export const metadata = {
  title: "AVR Website",
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body>
        <ClientProvider>{children}</ClientProvider>
      </body>
    </html>
  );
}
