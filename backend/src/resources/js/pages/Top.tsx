import { RegisterForm } from "@/components/RegisterForm";
import { Box, Container, Typography } from "@mui/material";

const Top = () => {
  return (
    <Container maxWidth="sm">
      <Box sx={{ my: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom>
          Welcome to the Registration Page
        </Typography>
        <RegisterForm />
      </Box>
    </Container>
  );
};

export default Top;
